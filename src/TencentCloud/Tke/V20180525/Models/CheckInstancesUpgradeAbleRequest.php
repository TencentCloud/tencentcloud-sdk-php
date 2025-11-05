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
 * CheckInstancesUpgradeAble请求参数结构体
 *
 * @method string getClusterId() 获取集群ID（请登录 [TKE 控制台](https://console.cloud.tencent.com/tke2) 获取集群 ID ）
 * @method void setClusterId(string $ClusterId) 设置集群ID（请登录 [TKE 控制台](https://console.cloud.tencent.com/tke2) 获取集群 ID ）
 * @method array getInstanceIds() 获取节点列表，空为全部节点
 * @method void setInstanceIds(array $InstanceIds) 设置节点列表，空为全部节点
 * @method string getUpgradeType() 获取升级类型，枚举值：reset(重装升级，支持大版本和小版本)，hot(原地滚动小版本升级)，major(原地滚动大版本升级)
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型，枚举值：reset(重装升级，支持大版本和小版本)，hot(原地滚动小版本升级)，major(原地滚动大版本升级)
 * @method integer getOffset() 获取偏移量，默认为0。关于 Offset 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于 Offset 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method array getFilter() 获取过滤条件列表，Name 可选值为ip、instanceId、hostname、label

- Name 为 ip 时，Value 为待查询节点 ip
- Name 为 hostname 时，Value 为待查询节点名称
- Name 为 label 时，Value 为待查询 K8S 节点 label
- Name 为 instanceId 时，Value 为 待查询节点 id
 * @method void setFilter(array $Filter) 设置过滤条件列表，Name 可选值为ip、instanceId、hostname、label

- Name 为 ip 时，Value 为待查询节点 ip
- Name 为 hostname 时，Value 为待查询节点名称
- Name 为 label 时，Value 为待查询 K8S 节点 label
- Name 为 instanceId 时，Value 为 待查询节点 id
 */
class CheckInstancesUpgradeAbleRequest extends AbstractModel
{
    /**
     * @var string 集群ID（请登录 [TKE 控制台](https://console.cloud.tencent.com/tke2) 获取集群 ID ）
     */
    public $ClusterId;

    /**
     * @var array 节点列表，空为全部节点
     */
    public $InstanceIds;

    /**
     * @var string 升级类型，枚举值：reset(重装升级，支持大版本和小版本)，hot(原地滚动小版本升级)，major(原地滚动大版本升级)
     */
    public $UpgradeType;

    /**
     * @var integer 偏移量，默认为0。关于 Offset 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @var array 过滤条件列表，Name 可选值为ip、instanceId、hostname、label

- Name 为 ip 时，Value 为待查询节点 ip
- Name 为 hostname 时，Value 为待查询节点名称
- Name 为 label 时，Value 为待查询 K8S 节点 label
- Name 为 instanceId 时，Value 为 待查询节点 id
     */
    public $Filter;

    /**
     * @param string $ClusterId 集群ID（请登录 [TKE 控制台](https://console.cloud.tencent.com/tke2) 获取集群 ID ）
     * @param array $InstanceIds 节点列表，空为全部节点
     * @param string $UpgradeType 升级类型，枚举值：reset(重装升级，支持大版本和小版本)，hot(原地滚动小版本升级)，major(原地滚动大版本升级)
     * @param integer $Offset 偏移量，默认为0。关于 Offset 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param array $Filter 过滤条件列表，Name 可选值为ip、instanceId、hostname、label

- Name 为 ip 时，Value 为待查询节点 ip
- Name 为 hostname 时，Value 为待查询节点名称
- Name 为 label 时，Value 为待查询 K8S 节点 label
- Name 为 instanceId 时，Value 为 待查询节点 id
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }
    }
}
