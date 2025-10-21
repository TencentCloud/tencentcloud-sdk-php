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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOpenPolicyList请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，请从容器服务集群控制台获取（https://console.cloud.tencent.com/tke2/cluster）。
 * @method void setClusterId(string $ClusterId) 设置集群ID，请从容器服务集群控制台获取（https://console.cloud.tencent.com/tke2/cluster）。
 * @method array getOpenPolicyInfoList() 获取修改的策略列表，目前仅支持修改EnforcementAction字段
 * @method void setOpenPolicyInfoList(array $OpenPolicyInfoList) 设置修改的策略列表，目前仅支持修改EnforcementAction字段
 * @method string getCategory() 获取策略分类 基线：baseline 优选：priority 可选：optional
 * @method void setCategory(string $Category) 设置策略分类 基线：baseline 优选：priority 可选：optional
 */
class ModifyOpenPolicyListRequest extends AbstractModel
{
    /**
     * @var string 集群ID，请从容器服务集群控制台获取（https://console.cloud.tencent.com/tke2/cluster）。
     */
    public $ClusterId;

    /**
     * @var array 修改的策略列表，目前仅支持修改EnforcementAction字段
     */
    public $OpenPolicyInfoList;

    /**
     * @var string 策略分类 基线：baseline 优选：priority 可选：optional
     */
    public $Category;

    /**
     * @param string $ClusterId 集群ID，请从容器服务集群控制台获取（https://console.cloud.tencent.com/tke2/cluster）。
     * @param array $OpenPolicyInfoList 修改的策略列表，目前仅支持修改EnforcementAction字段
     * @param string $Category 策略分类 基线：baseline 优选：priority 可选：optional
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OpenPolicyInfoList",$param) and $param["OpenPolicyInfoList"] !== null) {
            $this->OpenPolicyInfoList = [];
            foreach ($param["OpenPolicyInfoList"] as $key => $value){
                $obj = new OpenPolicySwitch();
                $obj->deserialize($value);
                array_push($this->OpenPolicyInfoList, $obj);
            }
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
