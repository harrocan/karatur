{if $Location == "Altara"}
Spis Zlodzii.
<br><br><br>
{if $Number > "0"}
<table>
<tr>
<td width="100"><b><u>Nick Zlodzieja:</td>
<td width="50"><b><u>ID:</td>
<td width="200"><b><u>Poziom Zlodzieja</u></b></td>

</tr>
{section name=mag loop=$Name}
<tr>
<td><a href=view.php?view={$Id[mag]}>{$Name[mag]}</a></td>
<td>{$Id[mag]}</td>
<td>{$Level[mag]}</td>
</tr>
{/section}
</table>

{/if}

{/if}

<br><br><br><a href="cech.php">wroc</a><br>
