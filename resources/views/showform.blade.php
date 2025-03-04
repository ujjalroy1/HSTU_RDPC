<!-- resources/views/select_recipients.blade.php -->
<form action="{{ route('sendMessage') }}" method="POST">
    @csrf

    <label>Select Recipients:</label><br>

    <!-- Checkbox for team members -->
    <label>
        <input type="checkbox" name="team_members" value="1" checked> Team Members
    </label><br>

    <!-- Checkbox for coach -->
    <label>
        <input type="checkbox" name="coach" value="1"> Coach
    </label><br>

    <!-- Select message file (you can change it to your own files) -->
    <label for="message_file">Select Message:</label>
    <select name="message_file" required>
        <option value="message1">Message 1</option>
        <option value="message2">Message 2</option>
        <!-- Add more message options as needed -->
    </select><br>

    <button type="submit">Send Message</button>
</form>
