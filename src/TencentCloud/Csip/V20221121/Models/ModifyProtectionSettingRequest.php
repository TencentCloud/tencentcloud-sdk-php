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
 * ModifyProtectionSetting请求参数结构体
 *
 * @method string getAssetType() 获取资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
 * @method void setAssetType(string $AssetType) 设置资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
 * @method array getConfig() 获取防护配置
 * @method void setConfig(array $Config) 设置防护配置
 * @method boolean getIsALL() 获取是否全部,这里需要配合筛选条件Filters
 * @method void setIsALL(boolean $IsALL) 设置是否全部,这里需要配合筛选条件Filters
 * @method array getFilters() 获取过滤参数,这里IsALL=true生效,结果作用到Config里
 * @method void setFilters(array $Filters) 设置过滤参数,这里IsALL=true生效,结果作用到Config里
 */
class ModifyProtectionSettingRequest extends AbstractModel
{
    /**
     * @var string 资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
     */
    public $AssetType;

    /**
     * @var array 防护配置
     */
    public $Config;

    /**
     * @var boolean 是否全部,这里需要配合筛选条件Filters
     */
    public $IsALL;

    /**
     * @var array 过滤参数,这里IsALL=true生效,结果作用到Config里
     */
    public $Filters;

    /**
     * @param string $AssetType 资产类型
- CWP 主机安全资产
- TCSS_HOST 容器主机节点
- TCSS_EKS 容器超级节点
     * @param array $Config 防护配置
     * @param boolean $IsALL 是否全部,这里需要配合筛选条件Filters
     * @param array $Filters 过滤参数,这里IsALL=true生效,结果作用到Config里
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new ModifyProtectionSetting();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
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
