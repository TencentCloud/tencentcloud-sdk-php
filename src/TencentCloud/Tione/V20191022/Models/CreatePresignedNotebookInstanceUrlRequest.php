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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePresignedNotebookInstanceUrl请求参数结构体
 *
 * @method string getNotebookInstanceName() 获取Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method integer getSessionExpirationDurationInSeconds() 获取session有效时间，秒，取值范围[1800, 43200]
 * @method void setSessionExpirationDurationInSeconds(integer $SessionExpirationDurationInSeconds) 设置session有效时间，秒，取值范围[1800, 43200]
 */
class CreatePresignedNotebookInstanceUrlRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     */
    public $NotebookInstanceName;

    /**
     * @var integer session有效时间，秒，取值范围[1800, 43200]
     */
    public $SessionExpirationDurationInSeconds;

    /**
     * @param string $NotebookInstanceName Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     * @param integer $SessionExpirationDurationInSeconds session有效时间，秒，取值范围[1800, 43200]
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
        if (array_key_exists("NotebookInstanceName",$param) and $param["NotebookInstanceName"] !== null) {
            $this->NotebookInstanceName = $param["NotebookInstanceName"];
        }

        if (array_key_exists("SessionExpirationDurationInSeconds",$param) and $param["SessionExpirationDurationInSeconds"] !== null) {
            $this->SessionExpirationDurationInSeconds = $param["SessionExpirationDurationInSeconds"];
        }
    }
}
