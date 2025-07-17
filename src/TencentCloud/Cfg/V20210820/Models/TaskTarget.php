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
 * @method integer getTargetId() 获取目标标签ID
 * @method void setTargetId(integer $TargetId) 设置目标标签ID
 * @method string getTargetDesc() 获取目标描述
 * @method void setTargetDesc(string $TargetDesc) 设置目标描述
 * @method integer getType() 获取1:演练场景
2:演练目标
 * @method void setType(integer $Type) 设置1:演练场景
2:演练目标
 * @method integer getSource() 获取1:平台 2:用户个人
 * @method void setSource(integer $Source) 设置1:平台 2:用户个人
 * @method integer getTargetStatus() 获取目标标签是否已被删除
 * @method void setTargetStatus(integer $TargetStatus) 设置目标标签是否已被删除
 */
class TaskTarget extends AbstractModel
{
    /**
     * @var integer 目标标签ID
     */
    public $TargetId;

    /**
     * @var string 目标描述
     */
    public $TargetDesc;

    /**
     * @var integer 1:演练场景
2:演练目标
     */
    public $Type;

    /**
     * @var integer 1:平台 2:用户个人
     */
    public $Source;

    /**
     * @var integer 目标标签是否已被删除
     */
    public $TargetStatus;

    /**
     * @param integer $TargetId 目标标签ID
     * @param string $TargetDesc 目标描述
     * @param integer $Type 1:演练场景
2:演练目标
     * @param integer $Source 1:平台 2:用户个人
     * @param integer $TargetStatus 目标标签是否已被删除
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
