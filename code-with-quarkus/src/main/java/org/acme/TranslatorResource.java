package org.acme;

import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import java.nio.charset.StandardCharsets;

import org.json.JSONObject;

import jakarta.ws.rs.Consumes;
import jakarta.ws.rs.POST;
import jakarta.ws.rs.Path;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.core.MediaType;

@Path("/translate")
public class TranslatorResource {

   
    private static final String API_KEY = "dear_user_please_insert_your_api";

    @POST
    @Consumes(MediaType.TEXT_PLAIN)
    @Produces(MediaType.TEXT_PLAIN)
    public String translate(String englishText) {
        try {
            
            String url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" + API_KEY;

            String prompt = "if this phrase is english translate it to moroccan darija , if it is in moroccan darija trandlate it to english, only tranalate it say nothing else , just like google translation " + englishText;

            JSONObject textPart = new JSONObject().put("text", prompt);
            JSONObject parts = new JSONObject().put("parts", new JSONObject[]{ textPart });
            JSONObject contents = new JSONObject().put("contents", new JSONObject[]{ parts });

            HttpClient client = HttpClient.newHttpClient();
            HttpRequest request = HttpRequest.newBuilder()
                .uri(URI.create(url))
                .header("Content-Type", "application/json")
                .POST(HttpRequest.BodyPublishers.ofString(contents.toString(), StandardCharsets.UTF_8))
                .build();

            HttpResponse<String> response = client.send(request, HttpResponse.BodyHandlers.ofString());
            String responseBody = response.body();

            if (!responseBody.contains("candidates")) {
                return "Google Error: " + responseBody;
            }

            JSONObject jsonResponse = new JSONObject(responseBody);
            return jsonResponse.getJSONArray("candidates")
                .getJSONObject(0)
                .getJSONObject("content")
                .getJSONArray("parts")
                .getJSONObject(0)
                .getString("text")
                .trim();

        } catch (Exception e) {
            return "Java Error: " + e.getMessage();
        }
    }
}