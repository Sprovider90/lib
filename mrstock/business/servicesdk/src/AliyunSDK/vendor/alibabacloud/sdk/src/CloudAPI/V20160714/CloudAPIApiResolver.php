<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the CloudAPI based on the method name as the Api name.
 *
 * @package   AlibabaCloud\CloudAPI\V20160714
 *
 * @method AbolishApi abolishApi(array $options = [])
 * @method AddIpControlPolicyItem addIpControlPolicyItem(array $options = [])
 * @method AddTrafficSpecialControl addTrafficSpecialControl(array $options = [])
 * @method CreateApi createApi(array $options = [])
 * @method CreateApiGroup createApiGroup(array $options = [])
 * @method CreateApiStageVariable createApiStageVariable(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateIntranetDomain createIntranetDomain(array $options = [])
 * @method CreateIpControl createIpControl(array $options = [])
 * @method CreateLogConfig createLogConfig(array $options = [])
 * @method CreateSignature createSignature(array $options = [])
 * @method CreateTrafficControl createTrafficControl(array $options = [])
 * @method DeleteAllTrafficSpecialControl deleteAllTrafficSpecialControl(array $options = [])
 * @method DeleteApi deleteApi(array $options = [])
 * @method DeleteApiGroup deleteApiGroup(array $options = [])
 * @method DeleteApiStageVariable deleteApiStageVariable(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteDomainCertificate deleteDomainCertificate(array $options = [])
 * @method DeleteIpControl deleteIpControl(array $options = [])
 * @method DeleteLogConfig deleteLogConfig(array $options = [])
 * @method DeleteSignature deleteSignature(array $options = [])
 * @method DeleteTrafficControl deleteTrafficControl(array $options = [])
 * @method DeleteTrafficSpecialControl deleteTrafficSpecialControl(array $options = [])
 * @method DeployApi deployApi(array $options = [])
 * @method DescribeApi describeApi(array $options = [])
 * @method DescribeApiDoc describeApiDoc(array $options = [])
 * @method DescribeApiErrorData describeApiErrorData(array $options = [])
 * @method DescribeApiGroup describeApiGroup(array $options = [])
 * @method DescribeApiGroups describeApiGroups(array $options = [])
 * @method DescribeApiHistories describeApiHistories(array $options = [])
 * @method DescribeApiHistory describeApiHistory(array $options = [])
 * @method DescribeApiIpControls describeApiIpControls(array $options = [])
 * @method DescribeApiLatencyData describeApiLatencyData(array $options = [])
 * @method DescribeApiQpsData describeApiQpsData(array $options = [])
 * @method DescribeApiSignatures describeApiSignatures(array $options = [])
 * @method DescribeApiStage describeApiStage(array $options = [])
 * @method DescribeApiTrafficControls describeApiTrafficControls(array $options = [])
 * @method DescribeApiTrafficData describeApiTrafficData(array $options = [])
 * @method DescribeApis describeApis(array $options = [])
 * @method DescribeApisByApp describeApisByApp(array $options = [])
 * @method DescribeApisByIpControl describeApisByIpControl(array $options = [])
 * @method DescribeApisBySignature describeApisBySignature(array $options = [])
 * @method DescribeApisByTrafficControl describeApisByTrafficControl(array $options = [])
 * @method DescribeApp describeApp(array $options = [])
 * @method DescribeAppAttributes describeAppAttributes(array $options = [])
 * @method DescribeAppSecurity describeAppSecurity(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeAuthorizedApis describeAuthorizedApis(array $options = [])
 * @method DescribeAuthorizedApps describeAuthorizedApps(array $options = [])
 * @method DescribeDeployedApi describeDeployedApi(array $options = [])
 * @method DescribeDeployedApis describeDeployedApis(array $options = [])
 * @method DescribeDomain describeDomain(array $options = [])
 * @method DescribeDomainsResolution describeDomainsResolution(array $options = [])
 * @method DescribeHistoryApis describeHistoryApis(array $options = [])
 * @method DescribeIpControlPolicyItems describeIpControlPolicyItems(array $options = [])
 * @method DescribeIpControls describeIpControls(array $options = [])
 * @method DescribeLogConfig describeLogConfig(array $options = [])
 * @method DescribePurchasedApiGroup describePurchasedApiGroup(array $options = [])
 * @method DescribePurchasedApiGroups describePurchasedApiGroups(array $options = [])
 * @method DescribePurchasedApis describePurchasedApis(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSignatures describeSignatures(array $options = [])
 * @method DescribeSignaturesByApi describeSignaturesByApi(array $options = [])
 * @method DescribeSystemParameters describeSystemParameters(array $options = [])
 * @method DescribeTrafficControls describeTrafficControls(array $options = [])
 * @method DescribeTrafficControlsByApi describeTrafficControlsByApi(array $options = [])
 * @method DescribeVpcAccesses describeVpcAccesses(array $options = [])
 * @method ImportSwagger importSwagger(array $options = [])
 * @method ModifyApi modifyApi(array $options = [])
 * @method ModifyApiGroup modifyApiGroup(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyIpControl modifyIpControl(array $options = [])
 * @method ModifyIpControlPolicyItem modifyIpControlPolicyItem(array $options = [])
 * @method ModifyLogConfig modifyLogConfig(array $options = [])
 * @method ModifySignature modifySignature(array $options = [])
 * @method ModifyTrafficControl modifyTrafficControl(array $options = [])
 * @method ReactivateDomain reactivateDomain(array $options = [])
 * @method RemoveApisAuthorities removeApisAuthorities(array $options = [])
 * @method RemoveAppsAuthorities removeAppsAuthorities(array $options = [])
 * @method RemoveIpControlApis removeIpControlApis(array $options = [])
 * @method RemoveIpControlPolicyItem removeIpControlPolicyItem(array $options = [])
 * @method RemoveSignatureApis removeSignatureApis(array $options = [])
 * @method RemoveTrafficControlApis removeTrafficControlApis(array $options = [])
 * @method RemoveVpcAccess removeVpcAccess(array $options = [])
 * @method ResetAppSecret resetAppSecret(array $options = [])
 * @method SdkGenerate sdkGenerate(array $options = [])
 * @method SdkGenerateByApp sdkGenerateByApp(array $options = [])
 * @method SdkGenerateByGroup sdkGenerateByGroup(array $options = [])
 * @method SetApisAuthorities setApisAuthorities(array $options = [])
 * @method SetAppsAuthorities setAppsAuthorities(array $options = [])
 * @method SetDomain setDomain(array $options = [])
 * @method SetDomainCertificate setDomainCertificate(array $options = [])
 * @method SetDomainWebSocketStatus setDomainWebSocketStatus(array $options = [])
 * @method SetIpControlApis setIpControlApis(array $options = [])
 * @method SetSignatureApis setSignatureApis(array $options = [])
 * @method SetTrafficControlApis setTrafficControlApis(array $options = [])
 * @method SetVpcAccess setVpcAccess(array $options = [])
 * @method SwitchApi switchApi(array $options = [])
 */
class CloudAPIApiResolver
{
    use ApiResolverTrait;
}
