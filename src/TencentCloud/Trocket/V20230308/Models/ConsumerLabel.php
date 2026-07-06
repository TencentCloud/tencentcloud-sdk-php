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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费组标签
 *
 * @method string getLabel() 获取<p>标签</p>
 * @method void setLabel(string $Label) 设置<p>标签</p>
 * @method string getState() 获取<p>标签状态</p><p>枚举值：</p><ul><li>ACTIVE： 生效中</li><li>DELETING： 删除中</li><li>UNKNOWN： 未知</li></ul>
 * @method void setState(string $State) 设置<p>标签状态</p><p>枚举值：</p><ul><li>ACTIVE： 生效中</li><li>DELETING： 删除中</li><li>UNKNOWN： 未知</li></ul>
 * @method integer getUpdatedAt() 获取<p>更新时间</p><p>单位：毫秒(ms)</p>
 * @method void setUpdatedAt(integer $UpdatedAt) 设置<p>更新时间</p><p>单位：毫秒(ms)</p>
 */
class ConsumerLabel extends AbstractModel
{
    /**
     * @var string <p>标签</p>
     */
    public $Label;

    /**
     * @var string <p>标签状态</p><p>枚举值：</p><ul><li>ACTIVE： 生效中</li><li>DELETING： 删除中</li><li>UNKNOWN： 未知</li></ul>
     */
    public $State;

    /**
     * @var integer <p>更新时间</p><p>单位：毫秒(ms)</p>
     */
    public $UpdatedAt;

    /**
     * @param string $Label <p>标签</p>
     * @param string $State <p>标签状态</p><p>枚举值：</p><ul><li>ACTIVE： 生效中</li><li>DELETING： 删除中</li><li>UNKNOWN： 未知</li></ul>
     * @param integer $UpdatedAt <p>更新时间</p><p>单位：毫秒(ms)</p>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
