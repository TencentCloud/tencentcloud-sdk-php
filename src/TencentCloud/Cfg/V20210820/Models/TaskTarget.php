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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 演练目标
 *
 * @method integer getTargetId() 获取<p>目标标签ID</p>
 * @method void setTargetId(integer $TargetId) 设置<p>目标标签ID</p>
 * @method string getTargetDesc() 获取<p>目标描述</p>
 * @method void setTargetDesc(string $TargetDesc) 设置<p>目标描述</p>
 * @method integer getType() 获取<p>1:演练场景<br>2:演练目标</p>
 * @method void setType(integer $Type) 设置<p>1:演练场景<br>2:演练目标</p>
 * @method integer getSource() 获取<p>1:平台 2:用户个人</p>
 * @method void setSource(integer $Source) 设置<p>1:平台 2:用户个人</p>
 * @method integer getTargetStatus() 获取<p>目标标签是否已被删除</p><p>枚举值：</p><ul><li>0： 未删除</li><li>1： 已删除</li></ul>
 * @method void setTargetStatus(integer $TargetStatus) 设置<p>目标标签是否已被删除</p><p>枚举值：</p><ul><li>0： 未删除</li><li>1： 已删除</li></ul>
 */
class TaskTarget extends AbstractModel
{
    /**
     * @var integer <p>目标标签ID</p>
     */
    public $TargetId;

    /**
     * @var string <p>目标描述</p>
     */
    public $TargetDesc;

    /**
     * @var integer <p>1:演练场景<br>2:演练目标</p>
     */
    public $Type;

    /**
     * @var integer <p>1:平台 2:用户个人</p>
     */
    public $Source;

    /**
     * @var integer <p>目标标签是否已被删除</p><p>枚举值：</p><ul><li>0： 未删除</li><li>1： 已删除</li></ul>
     */
    public $TargetStatus;

    /**
     * @param integer $TargetId <p>目标标签ID</p>
     * @param string $TargetDesc <p>目标描述</p>
     * @param integer $Type <p>1:演练场景<br>2:演练目标</p>
     * @param integer $Source <p>1:平台 2:用户个人</p>
     * @param integer $TargetStatus <p>目标标签是否已被删除</p><p>枚举值：</p><ul><li>0： 未删除</li><li>1： 已删除</li></ul>
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetDesc",$param) and $param["TargetDesc"] !== null) {
            $this->TargetDesc = $param["TargetDesc"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TargetStatus",$param) and $param["TargetStatus"] !== null) {
            $this->TargetStatus = $param["TargetStatus"];
        }
    }
}
