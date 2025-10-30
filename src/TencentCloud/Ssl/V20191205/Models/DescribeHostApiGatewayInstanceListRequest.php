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
 * DescribeHostApiGatewayInstanceList请求参数结构体
 *
 * @method string getCertificateId() 获取待部署的证书ID
 * @method void setCertificateId(string $CertificateId) 设置待部署的证书ID
 * @method integer getIsCache() 获取是否查询缓存，1：是； 0：否， 默认为查询缓存，缓存半小时
 * @method void setIsCache(integer $IsCache) 设置是否查询缓存，1：是； 0：否， 默认为查询缓存，缓存半小时
 * @method array getFilters() 获取过滤参数列表； FilterKey：domainMatch（查询域名是否匹配的实例列表） FilterValue：1，表示查询匹配； 0，表示查询不匹配； 默认查询匹配
 * @method void setFilters(array $Filters) 设置过滤参数列表； FilterKey：domainMatch（查询域名是否匹配的实例列表） FilterValue：1，表示查询匹配； 0，表示查询不匹配； 默认查询匹配
 * @method string getResourceType() 获取部署资源类型apigateway
 * @method void setResourceType(string $ResourceType) 设置部署资源类型apigateway
 * @method string getOldCertificateId() 获取已部署的证书ID
 * @method void setOldCertificateId(string $OldCertificateId) 设置已部署的证书ID
 * @method integer getLimit() 获取每页数量，默认10，最大值为200。	
 * @method void setLimit(integer $Limit) 设置每页数量，默认10，最大值为200。	
 * @method string getOffset() 获取分页偏移量，默认值为0。
 * @method void setOffset(string $Offset) 设置分页偏移量，默认值为0。
 */
class DescribeHostApiGatewayInstanceListRequest extends AbstractModel
{
    /**
     * @var string 待部署的证书ID
     */
    public $CertificateId;

    /**
     * @var integer 是否查询缓存，1：是； 0：否， 默认为查询缓存，缓存半小时
     */
    public $IsCache;

    /**
     * @var array 过滤参数列表； FilterKey：domainMatch（查询域名是否匹配的实例列表） FilterValue：1，表示查询匹配； 0，表示查询不匹配； 默认查询匹配
     */
    public $Filters;

    /**
     * @var string 部署资源类型apigateway
     * @deprecated
     */
    public $ResourceType;

    /**
     * @var string 已部署的证书ID
     */
    public $OldCertificateId;

    /**
     * @var integer 每页数量，默认10，最大值为200。	
     */
    public $Limit;

    /**
     * @var string 分页偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @param string $CertificateId 待部署的证书ID
     * @param integer $IsCache 是否查询缓存，1：是； 0：否， 默认为查询缓存，缓存半小时
     * @param array $Filters 过滤参数列表； FilterKey：domainMatch（查询域名是否匹配的实例列表） FilterValue：1，表示查询匹配； 0，表示查询不匹配； 默认查询匹配
     * @param string $ResourceType 部署资源类型apigateway
     * @param string $OldCertificateId 已部署的证书ID
     * @param integer $Limit 每页数量，默认10，最大值为200。	
     * @param string $Offset 分页偏移量，默认值为0。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("IsCache",$param) and $param["IsCache"] !== null) {
            $this->IsCache = $param["IsCache"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
