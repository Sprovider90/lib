<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Cms based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Cms\V20180308
 *
 * @method AccessKeyGet accessKeyGet(array $options = [])
 * @method AddMyGroupInstances addMyGroupInstances(array $options = [])
 * @method ApplyMonitoringTemplate applyMonitoringTemplate(array $options = [])
 * @method ApplyTemplate applyTemplate(array $options = [])
 * @method CreateAlarm createAlarm(array $options = [])
 * @method CreateMonitoringTemplate createMonitoringTemplate(array $options = [])
 * @method CreateMyGroupAlertBatch createMyGroupAlertBatch(array $options = [])
 * @method CreateMyGroups createMyGroups(array $options = [])
 * @method CreateNotifyPolicy createNotifyPolicy(array $options = [])
 * @method CreateTask createTask(array $options = [])
 * @method DeleteAlarm deleteAlarm(array $options = [])
 * @method DeleteCustomMetric deleteCustomMetric(array $options = [])
 * @method DeleteEventRule deleteEventRule(array $options = [])
 * @method DeleteEventTargets deleteEventTargets(array $options = [])
 * @method DeleteGroupDynamicRule deleteGroupDynamicRule(array $options = [])
 * @method DeleteMonitoringTemplate deleteMonitoringTemplate(array $options = [])
 * @method DeleteMyGroupInstances deleteMyGroupInstances(array $options = [])
 * @method DeleteMyGroups deleteMyGroups(array $options = [])
 * @method DeleteNotifyPolicy deleteNotifyPolicy(array $options = [])
 * @method DeleteTasks deleteTasks(array $options = [])
 * @method DescribeAlarmHistory describeAlarmHistory(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method DescribeAlarmsForDimensions describeAlarmsForDimensions(array $options = [])
 * @method DescribeAlarmsForResources describeAlarmsForResources(array $options = [])
 * @method DescribeContact describeContact(array $options = [])
 * @method DescribeEventRule describeEventRule(array $options = [])
 * @method DescribeISPAreaCity describeISPAreaCity(array $options = [])
 * @method DescribeTaskDetail describeTaskDetail(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DisableActiveAlert disableActiveAlert(array $options = [])
 * @method DisableAlarm disableAlarm(array $options = [])
 * @method DisableEventRule disableEventRule(array $options = [])
 * @method EnableActiveAlert enableActiveAlert(array $options = [])
 * @method EnableAlarm enableAlarm(array $options = [])
 * @method EnableEventRule enableEventRule(array $options = [])
 * @method GetContacts getContacts(array $options = [])
 * @method GetMonitoringTemplate getMonitoringTemplate(array $options = [])
 * @method GetMyGroupAlert getMyGroupAlert(array $options = [])
 * @method GetMyGroups getMyGroups(array $options = [])
 * @method GetNotifyPolicy getNotifyPolicy(array $options = [])
 * @method ListActiveAlertRule listActiveAlertRule(array $options = [])
 * @method ListAlarm listAlarm(array $options = [])
 * @method ListAlarmHistory listAlarmHistory(array $options = [])
 * @method ListContactGroup listContactGroup(array $options = [])
 * @method ListEventRules listEventRules(array $options = [])
 * @method ListEventTargetsByRule listEventTargetsByRule(array $options = [])
 * @method ListGroupDynamicRule listGroupDynamicRule(array $options = [])
 * @method ListMonitoringTemplates listMonitoringTemplates(array $options = [])
 * @method ListMyGroupCategories listMyGroupCategories(array $options = [])
 * @method ListMyGroupInstances listMyGroupInstances(array $options = [])
 * @method ListMyGroupInstancesDetails listMyGroupInstancesDetails(array $options = [])
 * @method ListMyGroups listMyGroups(array $options = [])
 * @method ListNotifyPolicy listNotifyPolicy(array $options = [])
 * @method ListProductOfActiveAlert listProductOfActiveAlert(array $options = [])
 * @method ModifyTask modifyTask(array $options = [])
 * @method NodeInstall nodeInstall(array $options = [])
 * @method NodeList nodeList(array $options = [])
 * @method NodeProcessCreate nodeProcessCreate(array $options = [])
 * @method NodeProcessDelete nodeProcessDelete(array $options = [])
 * @method NodeProcesses nodeProcesses(array $options = [])
 * @method NodeStatus nodeStatus(array $options = [])
 * @method NodeStatusList nodeStatusList(array $options = [])
 * @method NodeUninstall nodeUninstall(array $options = [])
 * @method ProfileGet profileGet(array $options = [])
 * @method ProfileSet profileSet(array $options = [])
 * @method PutCustomMetric putCustomMetric(array $options = [])
 * @method PutEvent putEvent(array $options = [])
 * @method PutEventRule putEventRule(array $options = [])
 * @method PutEventTargets putEventTargets(array $options = [])
 * @method PutGroupDynamicRule putGroupDynamicRule(array $options = [])
 * @method PutMetricAlarm putMetricAlarm(array $options = [])
 * @method QueryCustomEventCount queryCustomEventCount(array $options = [])
 * @method QueryCustomEventDetail queryCustomEventDetail(array $options = [])
 * @method QueryCustomEventHistogram queryCustomEventHistogram(array $options = [])
 * @method QueryCustomMetricList queryCustomMetricList(array $options = [])
 * @method QueryErrorDistribution queryErrorDistribution(array $options = [])
 * @method QueryMetricData queryMetricData(array $options = [])
 * @method QueryMetricLast queryMetricLast(array $options = [])
 * @method QueryMetricList queryMetricList(array $options = [])
 * @method QueryMetricMeta queryMetricMeta(array $options = [])
 * @method QueryMetricTop queryMetricTop(array $options = [])
 * @method QueryProjectMeta queryProjectMeta(array $options = [])
 * @method QueryStaticsAvailability queryStaticsAvailability(array $options = [])
 * @method QueryStaticsErrorRate queryStaticsErrorRate(array $options = [])
 * @method QueryStaticsResponseTime queryStaticsResponseTime(array $options = [])
 * @method QuerySystemEventCount querySystemEventCount(array $options = [])
 * @method QuerySystemEventDemo querySystemEventDemo(array $options = [])
 * @method QuerySystemEventDetail querySystemEventDetail(array $options = [])
 * @method QuerySystemEventHistogram querySystemEventHistogram(array $options = [])
 * @method QueryTaskConfig queryTaskConfig(array $options = [])
 * @method QueryTaskMonitorData queryTaskMonitorData(array $options = [])
 * @method SendDryRunSystemEvent sendDryRunSystemEvent(array $options = [])
 * @method StartTasks startTasks(array $options = [])
 * @method StopTasks stopTasks(array $options = [])
 * @method TaskConfigCreate taskConfigCreate(array $options = [])
 * @method TaskConfigDelete taskConfigDelete(array $options = [])
 * @method TaskConfigEnable taskConfigEnable(array $options = [])
 * @method TaskConfigList taskConfigList(array $options = [])
 * @method TaskConfigModify taskConfigModify(array $options = [])
 * @method TaskConfigUnhealthy taskConfigUnhealthy(array $options = [])
 * @method UpdateAlarm updateAlarm(array $options = [])
 * @method UpdateMonitoringTemplate updateMonitoringTemplate(array $options = [])
 * @method UpdateMyGroupAlert updateMyGroupAlert(array $options = [])
 * @method UpdateMyGroupInstances updateMyGroupInstances(array $options = [])
 * @method UpdateMyGroupMembers updateMyGroupMembers(array $options = [])
 * @method UpdateMyGroups updateMyGroups(array $options = [])
 */
class CmsApiResolver
{
    use ApiResolverTrait;
}
