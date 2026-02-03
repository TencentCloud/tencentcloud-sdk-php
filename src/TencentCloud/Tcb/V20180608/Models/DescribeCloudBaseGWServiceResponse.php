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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseGWService返回参数结构体
 *
 * @method array getServiceSet() 获取服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceSet(array $ServiceSet) 设置服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableService() 获取是否开启服务
 * @method void setEnableService(boolean $EnableService) 设置是否开启服务
 * @method string getDefaultDomain() 获取默认域名信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultDomain(string $DefaultDomain) 设置默认域名信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableUnion() 获取是否开启CDN迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableUnion(boolean $EnableUnion) 设置是否开启CDN迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableCheckAcrossDomain() 获取是否开启跨域校验，默认开启 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCheckAcrossDomain(boolean $EnableCheckAcrossDomain) 设置是否开启跨域校验，默认开启 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomRoutingRules() 获取自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomRoutingRules(string $CustomRoutingRules) 设置自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessFlag() 获取默认域名绑定类型，1绑定TCB-CDN，2绑定tcbingres（不经过cdn）
 * @method void setAccessFlag(integer $AccessFlag) 设置默认域名绑定类型，1绑定TCB-CDN，2绑定tcbingres（不经过cdn）
 * @method string getOriginDomain() 获取云接入源站域名
 * @method void setOriginDomain(string $OriginDomain) 设置云接入源站域名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudBaseGWServiceResponse extends AbstractModel
{
    /**
     * @var array 服务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceSet;

    /**
     * @var boolean 是否开启服务
     */
    public $EnableService;

    /**
     * @var string 默认域名信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultDomain;

    /**
     * @var boolean 是否开启CDN迁移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableUnion;

    /**
     * @var boolean 是否开启跨域校验，默认开启 true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCheckAcrossDomain;

    /**
     * @var string 自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomRoutingRules;

    /**
     * @var integer 默认域名绑定类型，1绑定TCB-CDN，2绑定tcbingres（不经过cdn）
     */
    public $AccessFlag;

    /**
     * @var string 云接入源站域名
     */
    public $OriginDomain;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ServiceSet 服务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableService 是否开启服务
     * @param string $DefaultDomain 默认域名信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableUnion 是否开启CDN迁移
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableCheckAcrossDomain 是否开启跨域校验，默认开启 true
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomRoutingRules 自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessFlag 默认域名绑定类型，1绑定TCB-CDN，2绑定tcbingres（不经过cdn）
     * @param string $OriginDomain 云接入源站域名
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServiceSet",$param) and $param["ServiceSet"] !== null) {
            $this->ServiceSet = [];
            foreach ($param["ServiceSet"] as $key => $value){
                $obj = new CloudBaseGWService();
                $obj->deserialize($value);
                array_push($this->ServiceSet, $obj);
            }
        }

        if (array_key_exists("EnableService",$param) and $param["EnableService"] !== null) {
            $this->EnableService = $param["EnableService"];
        }

        if (array_key_exists("DefaultDomain",$param) and $param["DefaultDomain"] !== null) {
            $this->DefaultDomain = $param["DefaultDomain"];
        }

        if (array_key_exists("EnableUnion",$param) and $param["EnableUnion"] !== null) {
            $this->EnableUnion = $param["EnableUnion"];
        }

        if (array_key_exists("EnableCheckAcrossDomain",$param) and $param["EnableCheckAcrossDomain"] !== null) {
            $this->EnableCheckAcrossDomain = $param["EnableCheckAcrossDomain"];
        }

        if (array_key_exists("CustomRoutingRules",$param) and $param["CustomRoutingRules"] !== null) {
            $this->CustomRoutingRules = $param["CustomRoutingRules"];
        }

        if (array_key_exists("AccessFlag",$param) and $param["AccessFlag"] !== null) {
            $this->AccessFlag = $param["AccessFlag"];
        }

        if (array_key_exists("OriginDomain",$param) and $param["OriginDomain"] !== null) {
            $this->OriginDomain = $param["OriginDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
