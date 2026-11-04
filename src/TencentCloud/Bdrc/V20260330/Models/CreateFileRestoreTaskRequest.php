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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileRestoreTask请求参数结构体
 *
 * @method string getBackupId() 获取<p>待恢复的备份ID</p>
 * @method void setBackupId(string $BackupId) 设置<p>待恢复的备份ID</p>
 * @method string getTargetResourceId() 获取<p>目标实例ID</p>
 * @method void setTargetResourceId(string $TargetResourceId) 设置<p>目标实例ID</p>
 * @method array getRestorePaths() 获取<ol><li>恢复路径列表（1-500项）；2. CVM和CFS文件备份不传则使用备份点中所有路径，COS备份该参数必填；3. 必须是绝对路径；</li></ol>
 * @method void setRestorePaths(array $RestorePaths) 设置<ol><li>恢复路径列表（1-500项）；2. CVM和CFS文件备份不传则使用备份点中所有路径，COS备份该参数必填；3. 必须是绝对路径；</li></ol>
 * @method string getTargetLocation() 获取<p>目标位置</p><ol><li>不传则恢复到原始路径</li><li>cos恢复时不能以【/】开头</li></ol>
 * @method void setTargetLocation(string $TargetLocation) 设置<p>目标位置</p><ol><li>不传则恢复到原始路径</li><li>cos恢复时不能以【/】开头</li></ol>
 * @method string getConflictStrategy() 获取<p>冲突处理策略：skip-跳过/&quot;         &quot;overwrite-覆盖/newer-保留较新的版本/&quot;         &quot;if_changed-内容变化时覆盖，默认overwrite</p>
 * @method void setConflictStrategy(string $ConflictStrategy) 设置<p>冲突处理策略：skip-跳过/&quot;         &quot;overwrite-覆盖/newer-保留较新的版本/&quot;         &quot;if_changed-内容变化时覆盖，默认overwrite</p>
 */
class CreateFileRestoreTaskRequest extends AbstractModel
{
    /**
     * @var string <p>待恢复的备份ID</p>
     */
    public $BackupId;

    /**
     * @var string <p>目标实例ID</p>
     */
    public $TargetResourceId;

    /**
     * @var array <ol><li>恢复路径列表（1-500项）；2. CVM和CFS文件备份不传则使用备份点中所有路径，COS备份该参数必填；3. 必须是绝对路径；</li></ol>
     */
    public $RestorePaths;

    /**
     * @var string <p>目标位置</p><ol><li>不传则恢复到原始路径</li><li>cos恢复时不能以【/】开头</li></ol>
     */
    public $TargetLocation;

    /**
     * @var string <p>冲突处理策略：skip-跳过/&quot;         &quot;overwrite-覆盖/newer-保留较新的版本/&quot;         &quot;if_changed-内容变化时覆盖，默认overwrite</p>
     */
    public $ConflictStrategy;

    /**
     * @param string $BackupId <p>待恢复的备份ID</p>
     * @param string $TargetResourceId <p>目标实例ID</p>
     * @param array $RestorePaths <ol><li>恢复路径列表（1-500项）；2. CVM和CFS文件备份不传则使用备份点中所有路径，COS备份该参数必填；3. 必须是绝对路径；</li></ol>
     * @param string $TargetLocation <p>目标位置</p><ol><li>不传则恢复到原始路径</li><li>cos恢复时不能以【/】开头</li></ol>
     * @param string $ConflictStrategy <p>冲突处理策略：skip-跳过/&quot;         &quot;overwrite-覆盖/newer-保留较新的版本/&quot;         &quot;if_changed-内容变化时覆盖，默认overwrite</p>
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("TargetResourceId",$param) and $param["TargetResourceId"] !== null) {
            $this->TargetResourceId = $param["TargetResourceId"];
        }

        if (array_key_exists("RestorePaths",$param) and $param["RestorePaths"] !== null) {
            $this->RestorePaths = $param["RestorePaths"];
        }

        if (array_key_exists("TargetLocation",$param) and $param["TargetLocation"] !== null) {
            $this->TargetLocation = $param["TargetLocation"];
        }

        if (array_key_exists("ConflictStrategy",$param) and $param["ConflictStrategy"] !== null) {
            $this->ConflictStrategy = $param["ConflictStrategy"];
        }
    }
}
