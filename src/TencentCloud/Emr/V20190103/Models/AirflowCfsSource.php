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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * airflow cfs dag目录源配置
 *
 * @method string getFileSystemId() 获取<p>cfs实例id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>cfs实例id</p>
 * @method string getDirectory() 获取<p>cfs实例挂载目录</p>
 * @method void setDirectory(string $Directory) 设置<p>cfs实例挂载目录</p>
 */
class AirflowCfsSource extends AbstractModel
{
    /**
     * @var string <p>cfs实例id</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>cfs实例挂载目录</p>
     */
    public $Directory;

    /**
     * @param string $FileSystemId <p>cfs实例id</p>
     * @param string $Directory <p>cfs实例挂载目录</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Directory",$param) and $param["Directory"] !== null) {
            $this->Directory = $param["Directory"];
        }
    }
}
