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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTWeSeeTasksByCondition请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getServiceCategory() 获取<p>算法类目。</p><p>枚举值：</p><ul><li>COMPREHENSION： 视觉理解</li><li>HIGHLIGHT： 视频浓缩</li></ul>
 * @method void setServiceCategory(string $ServiceCategory) 设置<p>算法类目。</p><p>枚举值：</p><ul><li>COMPREHENSION： 视觉理解</li><li>HIGHLIGHT： 视频浓缩</li></ul>
 * @method array getConditions() 获取<p>任务删除条件，至少传入一个条件。不同条件之间为 AND 关系，同一条件的 Values 之间为 OR 关系。</p>
 * @method void setConditions(array $Conditions) 设置<p>任务删除条件，至少传入一个条件。不同条件之间为 AND 关系，同一条件的 Values 之间为 OR 关系。</p>
 * @method integer getChannelId() 获取<p>通道 ID</p><p>默认值：0</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID</p><p>默认值：0</p>
 */
class DeleteTWeSeeTasksByConditionRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>算法类目。</p><p>枚举值：</p><ul><li>COMPREHENSION： 视觉理解</li><li>HIGHLIGHT： 视频浓缩</li></ul>
     */
    public $ServiceCategory;

    /**
     * @var array <p>任务删除条件，至少传入一个条件。不同条件之间为 AND 关系，同一条件的 Values 之间为 OR 关系。</p>
     */
    public $Conditions;

    /**
     * @var integer <p>通道 ID</p><p>默认值：0</p>
     */
    public $ChannelId;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $ServiceCategory <p>算法类目。</p><p>枚举值：</p><ul><li>COMPREHENSION： 视觉理解</li><li>HIGHLIGHT： 视频浓缩</li></ul>
     * @param array $Conditions <p>任务删除条件，至少传入一个条件。不同条件之间为 AND 关系，同一条件的 Values 之间为 OR 关系。</p>
     * @param integer $ChannelId <p>通道 ID</p><p>默认值：0</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new SeeDeleteTaskCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
