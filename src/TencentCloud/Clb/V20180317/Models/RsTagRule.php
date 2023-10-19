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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改节点标签的数据类型
 *
 * @method string getListenerId() 获取负载均衡监听器 ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID。
 * @method array getTargets() 获取要修改标签的后端机器列表。
 * @method void setTargets(array $Targets) 设置要修改标签的后端机器列表。
 * @method string getLocationId() 获取转发规则的ID，七层规则时需要此参数，4层规则不需要。
 * @method void setLocationId(string $LocationId) 设置转发规则的ID，七层规则时需要此参数，4层规则不需要。
 * @method string getTag() 获取后端服务修改后的标签。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Weight参数为空时，才以RsTagRule中的Tag参数为准。
 * @method void setTag(string $Tag) 设置后端服务修改后的标签。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Weight参数为空时，才以RsTagRule中的Tag参数为准。
 */
class RsTagRule extends AbstractModel
{
    /**
     * @var string 负载均衡监听器 ID。
     */
    public $ListenerId;

    /**
     * @var array 要修改标签的后端机器列表。
     */
    public $Targets;

    /**
     * @var string 转发规则的ID，七层规则时需要此参数，4层规则不需要。
     */
    public $LocationId;

    /**
     * @var string 后端服务修改后的标签。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Weight参数为空时，才以RsTagRule中的Tag参数为准。
     */
    public $Tag;

    /**
     * @param string $ListenerId 负载均衡监听器 ID。
     * @param array $Targets 要修改标签的后端机器列表。
     * @param string $LocationId 转发规则的ID，七层规则时需要此参数，4层规则不需要。
     * @param string $Tag 后端服务修改后的标签。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Weight参数为空时，才以RsTagRule中的Tag参数为准。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
