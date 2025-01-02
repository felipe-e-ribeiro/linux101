{{/*
Define common labels for resources
*/}}
{{- define "linuxweb.labels" -}}
app.kubernetes.io/name: {{ .Chart.Name }}
app.kubernetes.io/instance: {{ .Release.Name }}
app.kubernetes.io/version: {{ .Chart.AppVersion | quote }}
app.kubernetes.io/managed-by: {{ .Release.Service }}
{{- end }}
{{/*
Generate a fully qualified name for resources
*/}}
{{- define "fullname" -}}
{{ .Release.Name }}-{{ .Chart.Name }}
{{- end }}