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
 * @method integer getOffset() 获取页数。
 * @method void setOffset(integer $Offset) 设置页数。
 * @method integer getLimit() 获取每页数量。
 * @method void setLimit(integer $Limit) 设置每页数量。
 * @method string getSearchKey() 获取搜索关键词。
 * @method void setSearchKey(string $SearchKey) 设置搜索关键词。
 * @method string getCertificateType() 获取证书类型，可选值：CA，SVR。
 * @method void setCertificateType(string $CertificateType) 设置证书类型，可选值：CA，SVR。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getExpirationSort() 获取按到期时间排序：DESC降序， ASC 升序。
 * @method void setExpirationSort(string $ExpirationSort) 设置按到期时间排序：DESC降序， ASC 升序。
 * @method array getCertificateStatus() 获取证书状态。
 * @method void setCertificateStatus(array $CertificateStatus) 设置证书状态。
 * @method integer getDeployable() 获取是否可部署，可选值：1 = 可部署，0 =  不可部署。
 * @method void setDeployable(integer $Deployable) 设置是否可部署，可选值：1 = 可部署，0 =  不可部署。
 */

/**
 *DescribeCertificates请求参数结构体
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer 页数。
     */
    public $Offset;

    /**
     * @var integer 每页数量。
     */
    public $Limit;

    /**
     * @var string 搜索关键词。
     */
    public $SearchKey;

    /**
     * @var string 证书类型，可选值：CA，SVR。
     */
    public $CertificateType;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 按到期时间排序：DESC降序， ASC 升序。
     */
    public $ExpirationSort;

    /**
     * @var array 证书状态。
     */
    public $CertificateStatus;

    /**
     * @var integer 是否可部署，可选值：1 = 可部署，0 =  不可部署。
     */
    public $Deployable;
    /**
     * @param integer $Offset 页数。
     * @param integer $Limit 每页数量。
     * @param string $SearchKey 搜索关键词。
     * @param string $CertificateType 证书类型，可选值：CA，SVR。
     * @param integer $ProjectId 项目ID。
     * @param string $ExpirationSort 按到期时间排序：DESC降序， ASC 升序。
     * @param array $CertificateStatus 证书状态。
     * @param integer $Deployable 是否可部署，可选值：1 = 可部署，0 =  不可部署。
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
    }
}
