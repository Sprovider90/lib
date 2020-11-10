<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the EHPC based on the method name as the Api name.
 *
 * @package   AlibabaCloud\EHPC\V20180412
 *
 * @method static AddContainerApp addContainerApp(array $options = [])
 * @method static AddLocalNodes addLocalNodes(array $options = [])
 * @method static AddNodes addNodes(array $options = [])
 * @method static AddUsers addUsers(array $options = [])
 * @method static CreateCluster createCluster(array $options = [])
 * @method static CreateHybridCluster createHybridCluster(array $options = [])
 * @method static CreateJobFile createJobFile(array $options = [])
 * @method static CreateJobTemplate createJobTemplate(array $options = [])
 * @method static DeleteCluster deleteCluster(array $options = [])
 * @method static DeleteContainerApps deleteContainerApps(array $options = [])
 * @method static DeleteImage deleteImage(array $options = [])
 * @method static DeleteJobTemplates deleteJobTemplates(array $options = [])
 * @method static DeleteJobs deleteJobs(array $options = [])
 * @method static DeleteNodes deleteNodes(array $options = [])
 * @method static DeleteUsers deleteUsers(array $options = [])
 * @method static DescribeAutoScaleConfig describeAutoScaleConfig(array $options = [])
 * @method static DescribeCluster describeCluster(array $options = [])
 * @method static DescribeContainerApp describeContainerApp(array $options = [])
 * @method static DescribeImage describeImage(array $options = [])
 * @method static DescribeImageGatewayConfig describeImageGatewayConfig(array $options = [])
 * @method static DescribeImagePrice describeImagePrice(array $options = [])
 * @method static DescribePrice describePrice(array $options = [])
 * @method static EHPCApiResolver eHPCApiResolver(array $options = [])
 * @method static EditJobTemplate editJobTemplate(array $options = [])
 * @method static GetAutoScaleConfig getAutoScaleConfig(array $options = [])
 * @method static GetCloudMetricLogs getCloudMetricLogs(array $options = [])
 * @method static GetCloudMetricProfiling getCloudMetricProfiling(array $options = [])
 * @method static GetHybridClusterConfig getHybridClusterConfig(array $options = [])
 * @method static GetVisualServiceStatus getVisualServiceStatus(array $options = [])
 * @method static InvokeShellCommand invokeShellCommand(array $options = [])
 * @method static ListAvailableEcsTypes listAvailableEcsTypes(array $options = [])
 * @method static ListAvailableFileSystemTypes listAvailableFileSystemTypes(array $options = [])
 * @method static ListCloudMetricProfilings listCloudMetricProfilings(array $options = [])
 * @method static ListClusterLogs listClusterLogs(array $options = [])
 * @method static ListClusters listClusters(array $options = [])
 * @method static ListClustersMeta listClustersMeta(array $options = [])
 * @method static ListCommands listCommands(array $options = [])
 * @method static ListContainerApps listContainerApps(array $options = [])
 * @method static ListContainerImages listContainerImages(array $options = [])
 * @method static ListCpfsFileSystems listCpfsFileSystems(array $options = [])
 * @method static ListCurrentClientVersion listCurrentClientVersion(array $options = [])
 * @method static ListCustomImages listCustomImages(array $options = [])
 * @method static ListFileSystemWithMountTargets listFileSystemWithMountTargets(array $options = [])
 * @method static ListImages listImages(array $options = [])
 * @method static ListInvocationResults listInvocationResults(array $options = [])
 * @method static ListInvocationStatus listInvocationStatus(array $options = [])
 * @method static ListJobTemplates listJobTemplates(array $options = [])
 * @method static ListJobs listJobs(array $options = [])
 * @method static ListNodes listNodes(array $options = [])
 * @method static ListNodesNoPaging listNodesNoPaging(array $options = [])
 * @method static ListPreferredEcsTypes listPreferredEcsTypes(array $options = [])
 * @method static ListQueues listQueues(array $options = [])
 * @method static ListRegions listRegions(array $options = [])
 * @method static ListSoftwares listSoftwares(array $options = [])
 * @method static ListUsers listUsers(array $options = [])
 * @method static ListVolumes listVolumes(array $options = [])
 * @method static ModifyClusterAttributes modifyClusterAttributes(array $options = [])
 * @method static ModifyContainerAppAttributes modifyContainerAppAttributes(array $options = [])
 * @method static ModifyImageGatewayConfig modifyImageGatewayConfig(array $options = [])
 * @method static ModifyUserGroups modifyUserGroups(array $options = [])
 * @method static ModifyUserPasswords modifyUserPasswords(array $options = [])
 * @method static ModifyVisualServicePasswd modifyVisualServicePasswd(array $options = [])
 * @method static PullImage pullImage(array $options = [])
 * @method static RecoverCluster recoverCluster(array $options = [])
 * @method static RerunJobs rerunJobs(array $options = [])
 * @method static ResetNodes resetNodes(array $options = [])
 * @method static RunCloudMetricProfiling runCloudMetricProfiling(array $options = [])
 * @method static SetAutoScaleConfig setAutoScaleConfig(array $options = [])
 * @method static SetJobUser setJobUser(array $options = [])
 * @method static StartCluster startCluster(array $options = [])
 * @method static StartNodes startNodes(array $options = [])
 * @method static StartVisualService startVisualService(array $options = [])
 * @method static StopCluster stopCluster(array $options = [])
 * @method static StopJobs stopJobs(array $options = [])
 * @method static StopNodes stopNodes(array $options = [])
 * @method static StopVisualService stopVisualService(array $options = [])
 * @method static SubmitJob submitJob(array $options = [])
 * @method static UpgradeClient upgradeClient(array $options = [])
 */
class EHPC
{
    use ApiResolverTrait;
}
