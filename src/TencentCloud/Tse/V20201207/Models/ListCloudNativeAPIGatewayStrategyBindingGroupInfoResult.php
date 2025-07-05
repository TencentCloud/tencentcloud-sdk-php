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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云原生API网关实例策略绑定网关分组列表响应结果。
 *
 * @method integer getTotalCount() 获取数量
 * @method void setTotalCount(integer $TotalCount) 设置数量
 * @method array getGroupInfos() 获取云原生API网关实例策略绑定网关分组列表
 * @method void setGroupInfos(array $GroupInfos) 设置云原生API网关实例策略绑定网关分组列表
 */
class ListCloudNativeAPIGatewayStrategyBindingGroupInfoResult extends AbstractModel
{
    /**
     * @var integer 数量
     */
    public $TotalCount;

    /**
     * @var array 云原生API网关实例策略绑定网关分组列表
     */
    public $GroupInfos;

    /**
     * @param integer $TotalCount 数量
     * @param array $GroupInfos 云原生API网关实例策略绑定网关分组列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("GroupInfos",$param) and $param["GroupInfos"] !== null) {
            $this->GroupInfos = [];
            foreach ($param["GroupInfos"] as $key => $value){
                $obj = new CloudNativeAPIGatewayStrategyBindingGroupInfo();
                $obj->deserialize($value);
                array_push($this->GroupInfos, $obj);
            }
        }
    }
}
