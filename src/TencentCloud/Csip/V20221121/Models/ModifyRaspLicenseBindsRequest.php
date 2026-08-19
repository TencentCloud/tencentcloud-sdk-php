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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRaspLicenseBinds请求参数结构体
 *
 * @method string getAssetType() 获取资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
 * @method void setAssetType(string $AssetType) 设置资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
 * @method string getResourceID() 获取资源ID
 * @method void setResourceID(string $ResourceID) 设置资源ID
 * @method string getInquireKey() 获取计费项类型
- sv_yunjing_vas_small 小型包
- sv_yunjing_vas_medium 中型包
- sv_yunjing_vas_large 大型包
- sv_yunjing_vas_expansion 扩展包
 * @method void setInquireKey(string $InquireKey) 设置计费项类型
- sv_yunjing_vas_small 小型包
- sv_yunjing_vas_medium 中型包
- sv_yunjing_vas_large 大型包
- sv_yunjing_vas_expansion 扩展包
 * @method array getQUUID() 获取实例ID数组
 * @method void setQUUID(array $QUUID) 设置实例ID数组
 * @method boolean getIsALL() 获取是否全部机器实例
 * @method void setIsALL(boolean $IsALL) 设置是否全部机器实例
 * @method array getFilters() 获取过滤参数,该参数需要IsALL=true时生效,表示筛选的结果作用到QUUID里
 * @method void setFilters(array $Filters) 设置过滤参数,该参数需要IsALL=true时生效,表示筛选的结果作用到QUUID里
 */
class ModifyRaspLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string 资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
     */
    public $AssetType;

    /**
     * @var string 资源ID
     */
    public $ResourceID;

    /**
     * @var string 计费项类型
- sv_yunjing_vas_small 小型包
- sv_yunjing_vas_medium 中型包
- sv_yunjing_vas_large 大型包
- sv_yunjing_vas_expansion 扩展包
     */
    public $InquireKey;

    /**
     * @var array 实例ID数组
     */
    public $QUUID;

    /**
     * @var boolean 是否全部机器实例
     */
    public $IsALL;

    /**
     * @var array 过滤参数,该参数需要IsALL=true时生效,表示筛选的结果作用到QUUID里
     */
    public $Filters;

    /**
     * @param string $AssetType 资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
     * @param string $ResourceID 资源ID
     * @param string $InquireKey 计费项类型
- sv_yunjing_vas_small 小型包
- sv_yunjing_vas_medium 中型包
- sv_yunjing_vas_large 大型包
- sv_yunjing_vas_expansion 扩展包
     * @param array $QUUID 实例ID数组
     * @param boolean $IsALL 是否全部机器实例
     * @param array $Filters 过滤参数,该参数需要IsALL=true时生效,表示筛选的结果作用到QUUID里
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("IsALL",$param) and $param["IsALL"] !== null) {
            $this->IsALL = $param["IsALL"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
