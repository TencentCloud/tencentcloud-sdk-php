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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用级云盘挂载配置
 *
 * @method FileVolumeMount getFileVolumeMount() 获取<p>应用云盘配置</p>
 * @method void setFileVolumeMount(FileVolumeMount $FileVolumeMount) 设置<p>应用云盘配置</p>
 * @method integer getAction() 获取<p>1：新增 2：修改 3：删除</p>
 * @method void setAction(integer $Action) 设置<p>1：新增 2：修改 3：删除</p>
 */
class AppFileVolumeMount extends AbstractModel
{
    /**
     * @var FileVolumeMount <p>应用云盘配置</p>
     */
    public $FileVolumeMount;

    /**
     * @var integer <p>1：新增 2：修改 3：删除</p>
     */
    public $Action;

    /**
     * @param FileVolumeMount $FileVolumeMount <p>应用云盘配置</p>
     * @param integer $Action <p>1：新增 2：修改 3：删除</p>
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
        if (array_key_exists("FileVolumeMount",$param) and $param["FileVolumeMount"] !== null) {
            $this->FileVolumeMount = new FileVolumeMount();
            $this->FileVolumeMount->deserialize($param["FileVolumeMount"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
