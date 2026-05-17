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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回热任务
 *
 * @method integer getRestoreTaskId() 获取<p>回热任务ID</p>
 * @method void setRestoreTaskId(integer $RestoreTaskId) 设置<p>回热任务ID</p>
 * @method string getFilePath() 获取<p>回热任务文件路径，不支持目录和通配符</p>
 * @method void setFilePath(string $FilePath) 设置<p>回热任务文件路径，不支持目录和通配符</p>
 * @method integer getType() 获取<p>回热任务类型（1：标准；2：极速；3：批量，暂时仅支持标准）</p>
 * @method void setType(integer $Type) 设置<p>回热任务类型（1：标准；2：极速；3：批量，暂时仅支持标准）</p>
 * @method integer getDays() 获取<p>指定恢复出的临时副本的有效时长（单位天）</p>
 * @method void setDays(integer $Days) 设置<p>指定恢复出的临时副本的有效时长（单位天）</p>
 * @method integer getStatus() 获取<p>回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）</p>
 * @method void setStatus(integer $Status) 设置<p>回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var integer <p>回热任务ID</p>
     */
    public $RestoreTaskId;

    /**
     * @var string <p>回热任务文件路径，不支持目录和通配符</p>
     */
    public $FilePath;

    /**
     * @var integer <p>回热任务类型（1：标准；2：极速；3：批量，暂时仅支持标准）</p>
     */
    public $Type;

    /**
     * @var integer <p>指定恢复出的临时副本的有效时长（单位天）</p>
     */
    public $Days;

    /**
     * @var integer <p>回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @param integer $RestoreTaskId <p>回热任务ID</p>
     * @param string $FilePath <p>回热任务文件路径，不支持目录和通配符</p>
     * @param integer $Type <p>回热任务类型（1：标准；2：极速；3：批量，暂时仅支持标准）</p>
     * @param integer $Days <p>指定恢复出的临时副本的有效时长（单位天）</p>
     * @param integer $Status <p>回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）</p>
     * @param string $CreateTime <p>创建时间</p>
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
        if (array_key_exists("RestoreTaskId",$param) and $param["RestoreTaskId"] !== null) {
            $this->RestoreTaskId = $param["RestoreTaskId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
