<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Domain based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Domain\V20180129
 *
 * @method AcknowledgeTaskResult acknowledgeTaskResult(array $options = [])
 * @method BatchFuzzyMatchDomainSensitiveWord batchFuzzyMatchDomainSensitiveWord(array $options = [])
 * @method CancelDomainVerification cancelDomainVerification(array $options = [])
 * @method CancelQualificationVerification cancelQualificationVerification(array $options = [])
 * @method CheckDomain checkDomain(array $options = [])
 * @method CheckDomainSunriseClaim checkDomainSunriseClaim(array $options = [])
 * @method CheckMaxYearOfServerLock checkMaxYearOfServerLock(array $options = [])
 * @method CheckProcessingServerLockApply checkProcessingServerLockApply(array $options = [])
 * @method CheckTransferInFeasibility checkTransferInFeasibility(array $options = [])
 * @method ConfirmTransferInEmail confirmTransferInEmail(array $options = [])
 * @method DeleteDomainGroup deleteDomainGroup(array $options = [])
 * @method DeleteEmailVerification deleteEmailVerification(array $options = [])
 * @method DeleteRegistrantProfile deleteRegistrantProfile(array $options = [])
 * @method EmailVerified emailVerified(array $options = [])
 * @method FuzzyMatchDomainSensitiveWord fuzzyMatchDomainSensitiveWord(array $options = [])
 * @method GetQualificationUploadPolicy getQualificationUploadPolicy(array $options = [])
 * @method ListEmailVerification listEmailVerification(array $options = [])
 * @method ListServerLock listServerLock(array $options = [])
 * @method LookupTmchNotice lookupTmchNotice(array $options = [])
 * @method PollTaskResult pollTaskResult(array $options = [])
 * @method QueryAdvancedDomainList queryAdvancedDomainList(array $options = [])
 * @method QueryChangeLogList queryChangeLogList(array $options = [])
 * @method QueryContactInfo queryContactInfo(array $options = [])
 * @method QueryDSRecord queryDSRecord(array $options = [])
 * @method QueryDnsHost queryDnsHost(array $options = [])
 * @method QueryDomainAdminDivision queryDomainAdminDivision(array $options = [])
 * @method QueryDomainByInstanceId queryDomainByInstanceId(array $options = [])
 * @method QueryDomainGroupList queryDomainGroupList(array $options = [])
 * @method QueryDomainList queryDomainList(array $options = [])
 * @method QueryDomainRealNameVerificationInfo queryDomainRealNameVerificationInfo(array $options = [])
 * @method QueryDomainSuffix queryDomainSuffix(array $options = [])
 * @method QueryEmailVerification queryEmailVerification(array $options = [])
 * @method QueryEnsAssociation queryEnsAssociation(array $options = [])
 * @method QueryFailReasonForDomainRealNameVerification queryFailReasonForDomainRealNameVerification(array $options = [])
 * @method QueryFailReasonForRegistrantProfileRealNameVerification queryFailReasonForRegistrantProfileRealNameVerification(array $options = [])
 * @method QueryFailingReasonListForQualification queryFailingReasonListForQualification(array $options = [])
 * @method QueryLocalEnsAssociation queryLocalEnsAssociation(array $options = [])
 * @method QueryQualificationDetail queryQualificationDetail(array $options = [])
 * @method QueryRegistrantProfileRealNameVerificationInfo queryRegistrantProfileRealNameVerificationInfo(array $options = [])
 * @method QueryRegistrantProfiles queryRegistrantProfiles(array $options = [])
 * @method QueryServerLock queryServerLock(array $options = [])
 * @method QueryTaskDetailHistory queryTaskDetailHistory(array $options = [])
 * @method QueryTaskDetailList queryTaskDetailList(array $options = [])
 * @method QueryTaskInfoHistory queryTaskInfoHistory(array $options = [])
 * @method QueryTaskList queryTaskList(array $options = [])
 * @method QueryTransferInByInstanceId queryTransferInByInstanceId(array $options = [])
 * @method QueryTransferInList queryTransferInList(array $options = [])
 * @method QueryTransferOutInfo queryTransferOutInfo(array $options = [])
 * @method RegistrantProfileRealNameVerification registrantProfileRealNameVerification(array $options = [])
 * @method ResendEmailVerification resendEmailVerification(array $options = [])
 * @method ResetQualificationVerification resetQualificationVerification(array $options = [])
 * @method SaveBatchDomainRemark saveBatchDomainRemark(array $options = [])
 * @method SaveBatchTaskForCreatingOrderActivate saveBatchTaskForCreatingOrderActivate(array $options = [])
 * @method SaveBatchTaskForCreatingOrderRedeem saveBatchTaskForCreatingOrderRedeem(array $options = [])
 * @method SaveBatchTaskForCreatingOrderRenew saveBatchTaskForCreatingOrderRenew(array $options = [])
 * @method SaveBatchTaskForCreatingOrderTransfer saveBatchTaskForCreatingOrderTransfer(array $options = [])
 * @method SaveBatchTaskForDomainNameProxyService saveBatchTaskForDomainNameProxyService(array $options = [])
 * @method SaveBatchTaskForModifyingDomainDns saveBatchTaskForModifyingDomainDns(array $options = [])
 * @method SaveBatchTaskForTransferProhibitionLock saveBatchTaskForTransferProhibitionLock(array $options = [])
 * @method SaveBatchTaskForUpdateProhibitionLock saveBatchTaskForUpdateProhibitionLock(array $options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByNewContact saveBatchTaskForUpdatingContactInfoByNewContact(array $options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId saveBatchTaskForUpdatingContactInfoByRegistrantProfileId(array $options = [])
 * @method SaveDomainGroup saveDomainGroup(array $options = [])
 * @method SaveRegistrantProfile saveRegistrantProfile(array $options = [])
 * @method SaveSingleTaskForAddingDSRecord saveSingleTaskForAddingDSRecord(array $options = [])
 * @method SaveSingleTaskForApprovingTransferOut saveSingleTaskForApprovingTransferOut(array $options = [])
 * @method SaveSingleTaskForAssociatingEns saveSingleTaskForAssociatingEns(array $options = [])
 * @method SaveSingleTaskForCancelingTransferIn saveSingleTaskForCancelingTransferIn(array $options = [])
 * @method SaveSingleTaskForCancelingTransferOut saveSingleTaskForCancelingTransferOut(array $options = [])
 * @method SaveSingleTaskForCreatingDnsHost saveSingleTaskForCreatingDnsHost(array $options = [])
 * @method SaveSingleTaskForCreatingOrderActivate saveSingleTaskForCreatingOrderActivate(array $options = [])
 * @method SaveSingleTaskForCreatingOrderRedeem saveSingleTaskForCreatingOrderRedeem(array $options = [])
 * @method SaveSingleTaskForCreatingOrderRenew saveSingleTaskForCreatingOrderRenew(array $options = [])
 * @method SaveSingleTaskForCreatingOrderTransfer saveSingleTaskForCreatingOrderTransfer(array $options = [])
 * @method SaveSingleTaskForDeletingDSRecord saveSingleTaskForDeletingDSRecord(array $options = [])
 * @method SaveSingleTaskForDeletingDnsHost saveSingleTaskForDeletingDnsHost(array $options = [])
 * @method SaveSingleTaskForDisassociatingEns saveSingleTaskForDisassociatingEns(array $options = [])
 * @method SaveSingleTaskForDomainNameProxyService saveSingleTaskForDomainNameProxyService(array $options = [])
 * @method SaveSingleTaskForModifyingDSRecord saveSingleTaskForModifyingDSRecord(array $options = [])
 * @method SaveSingleTaskForModifyingDnsHost saveSingleTaskForModifyingDnsHost(array $options = [])
 * @method SaveSingleTaskForQueryingTransferAuthorizationCode saveSingleTaskForQueryingTransferAuthorizationCode(array $options = [])
 * @method SaveSingleTaskForSynchronizingDSRecord saveSingleTaskForSynchronizingDSRecord(array $options = [])
 * @method SaveSingleTaskForSynchronizingDnsHost saveSingleTaskForSynchronizingDnsHost(array $options = [])
 * @method SaveSingleTaskForTransferProhibitionLock saveSingleTaskForTransferProhibitionLock(array $options = [])
 * @method SaveSingleTaskForUpdateProhibitionLock saveSingleTaskForUpdateProhibitionLock(array $options = [])
 * @method SaveSingleTaskForUpdatingContactInfo saveSingleTaskForUpdatingContactInfo(array $options = [])
 * @method SaveTaskForSubmittingDomainDelete saveTaskForSubmittingDomainDelete(array $options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential saveTaskForSubmittingDomainRealNameVerificationByIdentityCredential(array $options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID(array $options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByIdentityCredential saveTaskForUpdatingRegistrantInfoByIdentityCredential(array $options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID saveTaskForUpdatingRegistrantInfoByRegistrantProfileID(array $options = [])
 * @method ScrollDomainList scrollDomainList(array $options = [])
 * @method SubmitEmailVerification submitEmailVerification(array $options = [])
 * @method TransferInCheckMailToken transferInCheckMailToken(array $options = [])
 * @method TransferInReenterTransferAuthorizationCode transferInReenterTransferAuthorizationCode(array $options = [])
 * @method TransferInRefetchWhoisEmail transferInRefetchWhoisEmail(array $options = [])
 * @method TransferInResendMailToken transferInResendMailToken(array $options = [])
 * @method UpdateDomainToDomainGroup updateDomainToDomainGroup(array $options = [])
 * @method VerifyContactField verifyContactField(array $options = [])
 * @method VerifyEmail verifyEmail(array $options = [])
 */
class DomainApiResolver
{
    use ApiResolverTrait;
}
