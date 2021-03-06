<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Iot based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Iot\V20180120
 *
 * @method static ActiveDevice activeDevice(array $options = [])
 * @method static AddEventRecordPlanDevice addEventRecordPlanDevice(array $options = [])
 * @method static AddRecordPlanDevice addRecordPlanDevice(array $options = [])
 * @method static AhQueryDeviceList ahQueryDeviceList(array $options = [])
 * @method static BatchAddDeviceGroupRelations batchAddDeviceGroupRelations(array $options = [])
 * @method static BatchCheckDeviceNames batchCheckDeviceNames(array $options = [])
 * @method static BatchDeleteDeviceGroupRelations batchDeleteDeviceGroupRelations(array $options = [])
 * @method static BatchGetDeviceState batchGetDeviceState(array $options = [])
 * @method static BatchRegisterDevice batchRegisterDevice(array $options = [])
 * @method static BatchRegisterDeviceWithApplyId batchRegisterDeviceWithApplyId(array $options = [])
 * @method static BindDeviceToEdgeInstance bindDeviceToEdgeInstance(array $options = [])
 * @method static BindFunctionToEdgeInstance bindFunctionToEdgeInstance(array $options = [])
 * @method static CreateDeviceGroup createDeviceGroup(array $options = [])
 * @method static CreateEdgeInstance createEdgeInstance(array $options = [])
 * @method static CreateEdgeInstanceDeployment createEdgeInstanceDeployment(array $options = [])
 * @method static CreateEdgeInstanceMessageRoute createEdgeInstanceMessageRoute(array $options = [])
 * @method static CreateProduct createProduct(array $options = [])
 * @method static CreateProductTags createProductTags(array $options = [])
 * @method static CreateProductTopic createProductTopic(array $options = [])
 * @method static CreateRule createRule(array $options = [])
 * @method static CreateRuleAction createRuleAction(array $options = [])
 * @method static CreateTopicRouteTable createTopicRouteTable(array $options = [])
 * @method static DeleteDevice deleteDevice(array $options = [])
 * @method static DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method static DeleteDeviceProp deleteDeviceProp(array $options = [])
 * @method static DeleteEdgeInstance deleteEdgeInstance(array $options = [])
 * @method static DeleteEdgeInstanceMessageRoute deleteEdgeInstanceMessageRoute(array $options = [])
 * @method static DeleteEventRecordPlan deleteEventRecordPlan(array $options = [])
 * @method static DeleteEventRecordPlanDevice deleteEventRecordPlanDevice(array $options = [])
 * @method static DeleteProduct deleteProduct(array $options = [])
 * @method static DeleteProductTags deleteProductTags(array $options = [])
 * @method static DeleteProductTopic deleteProductTopic(array $options = [])
 * @method static DeleteRecordPlan deleteRecordPlan(array $options = [])
 * @method static DeleteRecordPlanDevice deleteRecordPlanDevice(array $options = [])
 * @method static DeleteRule deleteRule(array $options = [])
 * @method static DeleteRuleAction deleteRuleAction(array $options = [])
 * @method static DeleteSqlTaskView deleteSqlTaskView(array $options = [])
 * @method static DeleteTimeTemplate deleteTimeTemplate(array $options = [])
 * @method static DeleteTopicRouteTable deleteTopicRouteTable(array $options = [])
 * @method static DisableThing disableThing(array $options = [])
 * @method static EnableThing enableThing(array $options = [])
 * @method static GenerateOssUriForTsl generateOssUriForTsl(array $options = [])
 * @method static GetDeviceProductList getDeviceProductList(array $options = [])
 * @method static GetDeviceShadow getDeviceShadow(array $options = [])
 * @method static GetDeviceStatus getDeviceStatus(array $options = [])
 * @method static GetEdgeInstance getEdgeInstance(array $options = [])
 * @method static GetEdgeInstanceMessageRoute getEdgeInstanceMessageRoute(array $options = [])
 * @method static GetGatewayBySubDevice getGatewayBySubDevice(array $options = [])
 * @method static GetRule getRule(array $options = [])
 * @method static GetRuleAction getRuleAction(array $options = [])
 * @method static GetThingTopo getThingTopo(array $options = [])
 * @method static ImportTslFromOss importTslFromOss(array $options = [])
 * @method static InvokeThingService invokeThingService(array $options = [])
 * @method static InvokeThingsService invokeThingsService(array $options = [])
 * @method static IotApiResolver iotApiResolver(array $options = [])
 * @method static ListProductByTags listProductByTags(array $options = [])
 * @method static ListProductTags listProductTags(array $options = [])
 * @method static ListRule listRule(array $options = [])
 * @method static ListRuleActions listRuleActions(array $options = [])
 * @method static ModifyDeviceStatus modifyDeviceStatus(array $options = [])
 * @method static NotifyAddThingTopo notifyAddThingTopo(array $options = [])
 * @method static Pub pub(array $options = [])
 * @method static PubBroadcast pubBroadcast(array $options = [])
 * @method static QueryAhDeviceList queryAhDeviceList(array $options = [])
 * @method static QueryAppDeviceList queryAppDeviceList(array $options = [])
 * @method static QueryBatchRegisterDeviceStatus queryBatchRegisterDeviceStatus(array $options = [])
 * @method static QueryDevice queryDevice(array $options = [])
 * @method static QueryDeviceByTags queryDeviceByTags(array $options = [])
 * @method static QueryDeviceDetail queryDeviceDetail(array $options = [])
 * @method static QueryDeviceEvent queryDeviceEvent(array $options = [])
 * @method static QueryDeviceEventData queryDeviceEventData(array $options = [])
 * @method static QueryDeviceEventPicture queryDeviceEventPicture(array $options = [])
 * @method static QueryDeviceEventRecord queryDeviceEventRecord(array $options = [])
 * @method static QueryDeviceFileVod queryDeviceFileVod(array $options = [])
 * @method static QueryDeviceGroupByDevice queryDeviceGroupByDevice(array $options = [])
 * @method static QueryDeviceGroupByTags queryDeviceGroupByTags(array $options = [])
 * @method static QueryDeviceGroupInfo queryDeviceGroupInfo(array $options = [])
 * @method static QueryDeviceGroupList queryDeviceGroupList(array $options = [])
 * @method static QueryDeviceGroupTagList queryDeviceGroupTagList(array $options = [])
 * @method static QueryDeviceList queryDeviceList(array $options = [])
 * @method static QueryDeviceListByDeviceGroup queryDeviceListByDeviceGroup(array $options = [])
 * @method static QueryDevicePictureFile queryDevicePictureFile(array $options = [])
 * @method static QueryDevicePictureLifeCycle queryDevicePictureLifeCycle(array $options = [])
 * @method static QueryDeviceProp queryDeviceProp(array $options = [])
 * @method static QueryDevicePropertiesData queryDevicePropertiesData(array $options = [])
 * @method static QueryDevicePropertyData queryDevicePropertyData(array $options = [])
 * @method static QueryDevicePropertyStatus queryDevicePropertyStatus(array $options = [])
 * @method static QueryDeviceRecordLifeCycle queryDeviceRecordLifeCycle(array $options = [])
 * @method static QueryDeviceServiceData queryDeviceServiceData(array $options = [])
 * @method static QueryDeviceStatistics queryDeviceStatistics(array $options = [])
 * @method static QueryEdgeInstance queryEdgeInstance(array $options = [])
 * @method static QueryEdgeInstanceDeployDetail queryEdgeInstanceDeployDetail(array $options = [])
 * @method static QueryEdgeInstanceDevice queryEdgeInstanceDevice(array $options = [])
 * @method static QueryEdgeInstanceFunction queryEdgeInstanceFunction(array $options = [])
 * @method static QueryEdgeInstanceGateway queryEdgeInstanceGateway(array $options = [])
 * @method static QueryEdgeInstanceMessageRoute queryEdgeInstanceMessageRoute(array $options = [])
 * @method static QueryEventRecordPlanByDevice queryEventRecordPlanByDevice(array $options = [])
 * @method static QueryEventRecordPlanDetail queryEventRecordPlanDetail(array $options = [])
 * @method static QueryEventRecordPlanDevices queryEventRecordPlanDevices(array $options = [])
 * @method static QueryEventRecordPlans queryEventRecordPlans(array $options = [])
 * @method static QueryLiveStreaming queryLiveStreaming(array $options = [])
 * @method static QueryMeasureList queryMeasureList(array $options = [])
 * @method static QueryMeasureSummary queryMeasureSummary(array $options = [])
 * @method static QueryMeasureTop queryMeasureTop(array $options = [])
 * @method static QueryMonthRecord queryMonthRecord(array $options = [])
 * @method static QueryPageByApplyId queryPageByApplyId(array $options = [])
 * @method static QueryPictureFiles queryPictureFiles(array $options = [])
 * @method static QueryProduct queryProduct(array $options = [])
 * @method static QueryProductBiz queryProductBiz(array $options = [])
 * @method static QueryProductList queryProductList(array $options = [])
 * @method static QueryProductTopic queryProductTopic(array $options = [])
 * @method static QueryRecord queryRecord(array $options = [])
 * @method static QueryRecordPlanByDevice queryRecordPlanByDevice(array $options = [])
 * @method static QueryRecordPlanDetail queryRecordPlanDetail(array $options = [])
 * @method static QueryRecordPlanDevices queryRecordPlanDevices(array $options = [])
 * @method static QueryRecordPlans queryRecordPlans(array $options = [])
 * @method static QueryRecordUrl queryRecordUrl(array $options = [])
 * @method static QuerySuperDeviceGroup querySuperDeviceGroup(array $options = [])
 * @method static QueryTimeTemplate queryTimeTemplate(array $options = [])
 * @method static QueryTimeTemplateDetail queryTimeTemplateDetail(array $options = [])
 * @method static QueryTopicReverseRouteTable queryTopicReverseRouteTable(array $options = [])
 * @method static QueryTopicRouteTable queryTopicRouteTable(array $options = [])
 * @method static RRpc rRpc(array $options = [])
 * @method static RegisterDevice registerDevice(array $options = [])
 * @method static RemoveThingTopo removeThingTopo(array $options = [])
 * @method static ResetEdgeInstanceDeployments resetEdgeInstanceDeployments(array $options = [])
 * @method static SaveDeviceProp saveDeviceProp(array $options = [])
 * @method static SetDeviceGroupTags setDeviceGroupTags(array $options = [])
 * @method static SetDevicePictureLifeCycle setDevicePictureLifeCycle(array $options = [])
 * @method static SetDeviceProperty setDeviceProperty(array $options = [])
 * @method static SetDeviceRecordLifeCycle setDeviceRecordLifeCycle(array $options = [])
 * @method static SetDeviceStorageLifeCycle setDeviceStorageLifeCycle(array $options = [])
 * @method static SetDevicesProperty setDevicesProperty(array $options = [])
 * @method static SetEventRecordPlan setEventRecordPlan(array $options = [])
 * @method static SetRecordPlan setRecordPlan(array $options = [])
 * @method static SetTimeTemplate setTimeTemplate(array $options = [])
 * @method static StartRule startRule(array $options = [])
 * @method static StopLiveStreaming stopLiveStreaming(array $options = [])
 * @method static StopRule stopRule(array $options = [])
 * @method static TriggerCapturePicture triggerCapturePicture(array $options = [])
 * @method static TriggerRecord triggerRecord(array $options = [])
 * @method static UnbindDeviceFromEdgeInstance unbindDeviceFromEdgeInstance(array $options = [])
 * @method static UnbindFunctionFromEdgeInstance unbindFunctionFromEdgeInstance(array $options = [])
 * @method static UpdateDeviceGroup updateDeviceGroup(array $options = [])
 * @method static UpdateDeviceShadow updateDeviceShadow(array $options = [])
 * @method static UpdateEdgeInstance updateEdgeInstance(array $options = [])
 * @method static UpdateEdgeInstanceFunction updateEdgeInstanceFunction(array $options = [])
 * @method static UpdateEdgeInstanceMessageRoute updateEdgeInstanceMessageRoute(array $options = [])
 * @method static UpdateEventRecordPlan updateEventRecordPlan(array $options = [])
 * @method static UpdateEventRecordPlanDevice updateEventRecordPlanDevice(array $options = [])
 * @method static UpdateProduct updateProduct(array $options = [])
 * @method static UpdateProductTags updateProductTags(array $options = [])
 * @method static UpdateProductTopic updateProductTopic(array $options = [])
 * @method static UpdateRecordPlan updateRecordPlan(array $options = [])
 * @method static UpdateRecordPlanDevice updateRecordPlanDevice(array $options = [])
 * @method static UpdateRule updateRule(array $options = [])
 * @method static UpdateRuleAction updateRuleAction(array $options = [])
 * @method static UpdateTimeTemplate updateTimeTemplate(array $options = [])
 */
class Iot
{
    use ApiResolverTrait;
}
