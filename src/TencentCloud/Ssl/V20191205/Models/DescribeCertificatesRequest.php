<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificates请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量，从0开始。 默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，从0开始。 默认为0</p>
 * @method integer getLimit() 获取<p>每页数量，默认10。最大值1000，如超过1000按1000处理</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认10。最大值1000，如超过1000按1000处理</p>
 * @method string getSearchKey() 获取<p>搜索关键词，模糊匹配证书 ID、备注名称、证书域名</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>搜索关键词，模糊匹配证书 ID、备注名称、证书域名</p>
 * @method string getCertificateType() 获取<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
 * @method void setCertificateType(string $CertificateType) 设置<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
 * @method integer getProjectId() 获取<p>项目 ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID。</p>
 * @method string getExpirationSort() 获取<p>默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。</p>
 * @method void setExpirationSort(string $ExpirationSort) 设置<p>默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。</p>
 * @method array getCertificateStatus() 获取<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中</p>
 * @method void setCertificateStatus(array $CertificateStatus) 设置<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中</p>
 * @method integer getDeployable() 获取<p>是否可部署，可选值：1 = 可部署，0 =  不可部署。</p>
 * @method void setDeployable(integer $Deployable) 设置<p>是否可部署，可选值：1 = 可部署，0 =  不可部署。</p>
 * @method integer getUpload() 获取<p>是否筛选上传托管的 1筛选，0不筛选</p>
 * @method void setUpload(integer $Upload) 设置<p>是否筛选上传托管的 1筛选，0不筛选</p>
 * @method integer getRenew() 获取<p>是否筛选可续期证书 1筛选 0不筛选</p>
 * @method void setRenew(integer $Renew) 设置<p>是否筛选可续期证书 1筛选 0不筛选</p>
 * @method string getFilterSource() 获取<p>筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部</p>
 * @method void setFilterSource(string $FilterSource) 设置<p>筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部</p>
 * @method integer getIsSM() 获取<p>是否筛选国密证书。1:筛选  0:不筛选</p>
 * @method void setIsSM(integer $IsSM) 设置<p>是否筛选国密证书。1:筛选  0:不筛选</p>
 * @method integer getFilterExpiring() 获取<p>筛选证书是否即将过期，传1是筛选，0不筛选</p>
 * @method void setFilterExpiring(integer $FilterExpiring) 设置<p>筛选证书是否即将过期，传1是筛选，0不筛选</p>
 * @method integer getHostable() 获取<p>是否可托管，可选值：1 = 可托管，0 =  不可托管。</p>
 * @method void setHostable(integer $Hostable) 设置<p>是否可托管，可选值：1 = 可托管，0 =  不可托管。</p>
 * @method array getTags() 获取<p>筛选指定标签的证书</p>
 * @method void setTags(array $Tags) 设置<p>筛选指定标签的证书</p>
 * @method integer getIsPendingIssue() 获取<p>是否筛选等待签发的证书，传1是筛选，0和null不筛选</p>
 * @method void setIsPendingIssue(integer $IsPendingIssue) 设置<p>是否筛选等待签发的证书，传1是筛选，0和null不筛选</p>
 * @method array getCertIds() 获取<p>筛选指定证书ID的证书，只支持有权限的证书ID</p>
 * @method void setCertIds(array $CertIds) 设置<p>筛选指定证书ID的证书，只支持有权限的证书ID</p>
 * @method string getServiceId() 获取<p>订阅服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>订阅服务ID</p>
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量，从0开始。 默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认10。最大值1000，如超过1000按1000处理</p>
     */
    public $Limit;

    /**
     * @var string <p>搜索关键词，模糊匹配证书 ID、备注名称、证书域名</p>
     */
    public $SearchKey;

    /**
     * @var string <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
     */
    public $CertificateType;

    /**
     * @var integer <p>项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。</p>
     */
    public $ExpirationSort;

    /**
     * @var array <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中</p>
     */
    public $CertificateStatus;

    /**
     * @var integer <p>是否可部署，可选值：1 = 可部署，0 =  不可部署。</p>
     */
    public $Deployable;

    /**
     * @var integer <p>是否筛选上传托管的 1筛选，0不筛选</p>
     */
    public $Upload;

    /**
     * @var integer <p>是否筛选可续期证书 1筛选 0不筛选</p>
     */
    public $Renew;

    /**
     * @var string <p>筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部</p>
     */
    public $FilterSource;

    /**
     * @var integer <p>是否筛选国密证书。1:筛选  0:不筛选</p>
     */
    public $IsSM;

    /**
     * @var integer <p>筛选证书是否即将过期，传1是筛选，0不筛选</p>
     */
    public $FilterExpiring;

    /**
     * @var integer <p>是否可托管，可选值：1 = 可托管，0 =  不可托管。</p>
     */
    public $Hostable;

    /**
     * @var array <p>筛选指定标签的证书</p>
     */
    public $Tags;

    /**
     * @var integer <p>是否筛选等待签发的证书，传1是筛选，0和null不筛选</p>
     */
    public $IsPendingIssue;

    /**
     * @var array <p>筛选指定证书ID的证书，只支持有权限的证书ID</p>
     */
    public $CertIds;

    /**
     * @var string <p>订阅服务ID</p>
     */
    public $ServiceId;

    /**
     * @param integer $Offset <p>分页偏移量，从0开始。 默认为0</p>
     * @param integer $Limit <p>每页数量，默认10。最大值1000，如超过1000按1000处理</p>
     * @param string $SearchKey <p>搜索关键词，模糊匹配证书 ID、备注名称、证书域名</p>
     * @param string $CertificateType <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
     * @param integer $ProjectId <p>项目 ID。</p>
     * @param string $ExpirationSort <p>默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。</p>
     * @param array $CertificateStatus <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中</p>
     * @param integer $Deployable <p>是否可部署，可选值：1 = 可部署，0 =  不可部署。</p>
     * @param integer $Upload <p>是否筛选上传托管的 1筛选，0不筛选</p>
     * @param integer $Renew <p>是否筛选可续期证书 1筛选 0不筛选</p>
     * @param string $FilterSource <p>筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部</p>
     * @param integer $IsSM <p>是否筛选国密证书。1:筛选  0:不筛选</p>
     * @param integer $FilterExpiring <p>筛选证书是否即将过期，传1是筛选，0不筛选</p>
     * @param integer $Hostable <p>是否可托管，可选值：1 = 可托管，0 =  不可托管。</p>
     * @param array $Tags <p>筛选指定标签的证书</p>
     * @param integer $IsPendingIssue <p>是否筛选等待签发的证书，传1是筛选，0和null不筛选</p>
     * @param array $CertIds <p>筛选指定证书ID的证书，只支持有权限的证书ID</p>
     * @param string $ServiceId <p>订阅服务ID</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ExpirationSort",$param) and $param["ExpirationSort"] !== null) {
            $this->ExpirationSort = $param["ExpirationSort"];
        }

        if (array_key_exists("CertificateStatus",$param) and $param["CertificateStatus"] !== null) {
            $this->CertificateStatus = $param["CertificateStatus"];
        }

        if (array_key_exists("Deployable",$param) and $param["Deployable"] !== null) {
            $this->Deployable = $param["Deployable"];
        }

        if (array_key_exists("Upload",$param) and $param["Upload"] !== null) {
            $this->Upload = $param["Upload"];
        }

        if (array_key_exists("Renew",$param) and $param["Renew"] !== null) {
            $this->Renew = $param["Renew"];
        }

        if (array_key_exists("FilterSource",$param) and $param["FilterSource"] !== null) {
            $this->FilterSource = $param["FilterSource"];
        }

        if (array_key_exists("IsSM",$param) and $param["IsSM"] !== null) {
            $this->IsSM = $param["IsSM"];
        }

        if (array_key_exists("FilterExpiring",$param) and $param["FilterExpiring"] !== null) {
            $this->FilterExpiring = $param["FilterExpiring"];
        }

        if (array_key_exists("Hostable",$param) and $param["Hostable"] !== null) {
            $this->Hostable = $param["Hostable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsPendingIssue",$param) and $param["IsPendingIssue"] !== null) {
            $this->IsPendingIssue = $param["IsPendingIssue"];
        }

        if (array_key_exists("CertIds",$param) and $param["CertIds"] !== null) {
            $this->CertIds = $param["CertIds"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
