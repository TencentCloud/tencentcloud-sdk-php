<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getOffset() 获取分页偏移量，从0开始。 默认为0
 * @method void setOffset(integer $Offset) 设置分页偏移量，从0开始。 默认为0
 * @method integer getLimit() 获取每页数量，默认10。最大值1000，如超过1000按1000处理
 * @method void setLimit(integer $Limit) 设置每页数量，默认10。最大值1000，如超过1000按1000处理
 * @method string getSearchKey() 获取搜索关键词，模糊匹配证书 ID、备注名称、证书域名
 * @method void setSearchKey(string $SearchKey) 设置搜索关键词，模糊匹配证书 ID、备注名称、证书域名
 * @method string getCertificateType() 获取证书类型：CA = 客户端证书，SVR = 服务器证书。
 * @method void setCertificateType(string $CertificateType) 设置证书类型：CA = 客户端证书，SVR = 服务器证书。
 * @method integer getProjectId() 获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
 * @method string getExpirationSort() 获取默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。
 * @method void setExpirationSort(string $ExpirationSort) 设置默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。
 * @method array getCertificateStatus() 获取证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中
 * @method void setCertificateStatus(array $CertificateStatus) 设置证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中
 * @method integer getDeployable() 获取是否可部署，可选值：1 = 可部署，0 =  不可部署。
 * @method void setDeployable(integer $Deployable) 设置是否可部署，可选值：1 = 可部署，0 =  不可部署。
 * @method integer getUpload() 获取是否筛选上传托管的 1筛选，0不筛选
 * @method void setUpload(integer $Upload) 设置是否筛选上传托管的 1筛选，0不筛选
 * @method integer getRenew() 获取是否筛选可续期证书 1筛选 0不筛选
 * @method void setRenew(integer $Renew) 设置是否筛选可续期证书 1筛选 0不筛选
 * @method string getFilterSource() 获取筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部
 * @method void setFilterSource(string $FilterSource) 设置筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部
 * @method integer getIsSM() 获取是否筛选国密证书。1:筛选  0:不筛选
 * @method void setIsSM(integer $IsSM) 设置是否筛选国密证书。1:筛选  0:不筛选
 * @method integer getFilterExpiring() 获取筛选证书是否即将过期，传1是筛选，0不筛选
 * @method void setFilterExpiring(integer $FilterExpiring) 设置筛选证书是否即将过期，传1是筛选，0不筛选
 * @method integer getHostable() 获取是否可托管，可选值：1 = 可托管，0 =  不可托管。
 * @method void setHostable(integer $Hostable) 设置是否可托管，可选值：1 = 可托管，0 =  不可托管。
 * @method array getTags() 获取筛选指定标签的证书
 * @method void setTags(array $Tags) 设置筛选指定标签的证书
 * @method integer getIsPendingIssue() 获取是否筛选等待签发的证书，传1是筛选，0和null不筛选
 * @method void setIsPendingIssue(integer $IsPendingIssue) 设置是否筛选等待签发的证书，传1是筛选，0和null不筛选
 * @method array getCertIds() 获取筛选指定证书ID的证书，只支持有权限的证书ID
 * @method void setCertIds(array $CertIds) 设置筛选指定证书ID的证书，只支持有权限的证书ID
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量，从0开始。 默认为0
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认10。最大值1000，如超过1000按1000处理
     */
    public $Limit;

    /**
     * @var string 搜索关键词，模糊匹配证书 ID、备注名称、证书域名
     */
    public $SearchKey;

    /**
     * @var string 证书类型：CA = 客户端证书，SVR = 服务器证书。
     */
    public $CertificateType;

    /**
     * @var integer 项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。
     */
    public $ExpirationSort;

    /**
     * @var array 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中
     */
    public $CertificateStatus;

    /**
     * @var integer 是否可部署，可选值：1 = 可部署，0 =  不可部署。
     */
    public $Deployable;

    /**
     * @var integer 是否筛选上传托管的 1筛选，0不筛选
     */
    public $Upload;

    /**
     * @var integer 是否筛选可续期证书 1筛选 0不筛选
     */
    public $Renew;

    /**
     * @var string 筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部
     */
    public $FilterSource;

    /**
     * @var integer 是否筛选国密证书。1:筛选  0:不筛选
     */
    public $IsSM;

    /**
     * @var integer 筛选证书是否即将过期，传1是筛选，0不筛选
     */
    public $FilterExpiring;

    /**
     * @var integer 是否可托管，可选值：1 = 可托管，0 =  不可托管。
     */
    public $Hostable;

    /**
     * @var array 筛选指定标签的证书
     */
    public $Tags;

    /**
     * @var integer 是否筛选等待签发的证书，传1是筛选，0和null不筛选
     */
    public $IsPendingIssue;

    /**
     * @var array 筛选指定证书ID的证书，只支持有权限的证书ID
     */
    public $CertIds;

    /**
     * @param integer $Offset 分页偏移量，从0开始。 默认为0
     * @param integer $Limit 每页数量，默认10。最大值1000，如超过1000按1000处理
     * @param string $SearchKey 搜索关键词，模糊匹配证书 ID、备注名称、证书域名
     * @param string $CertificateType 证书类型：CA = 客户端证书，SVR = 服务器证书。
     * @param integer $ProjectId 项目 ID。
     * @param string $ExpirationSort 默认按照证书申请时间降序； 若传排序则按到期时间排序：DESC = 证书到期时间降序， ASC = 证书到期时间升序。
     * @param array $CertificateStatus 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 已退款。 15 = 证书迁移中
     * @param integer $Deployable 是否可部署，可选值：1 = 可部署，0 =  不可部署。
     * @param integer $Upload 是否筛选上传托管的 1筛选，0不筛选
     * @param integer $Renew 是否筛选可续期证书 1筛选 0不筛选
     * @param string $FilterSource 筛选来源， upload：上传证书， buy：腾讯云证书， 不传默认全部
     * @param integer $IsSM 是否筛选国密证书。1:筛选  0:不筛选
     * @param integer $FilterExpiring 筛选证书是否即将过期，传1是筛选，0不筛选
     * @param integer $Hostable 是否可托管，可选值：1 = 可托管，0 =  不可托管。
     * @param array $Tags 筛选指定标签的证书
     * @param integer $IsPendingIssue 是否筛选等待签发的证书，传1是筛选，0和null不筛选
     * @param array $CertIds 筛选指定证书ID的证书，只支持有权限的证书ID
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
    }
}
