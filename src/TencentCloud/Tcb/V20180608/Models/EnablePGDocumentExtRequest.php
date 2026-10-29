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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnablePGDocumentExt请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境 id，租户级标识信息，开通环境时产生，全局唯一</p><p>参数格式：用户自定义小写英文命名 + 随机雪花字符</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境 id，租户级标识信息，开通环境时产生，全局唯一</p><p>参数格式：用户自定义小写英文命名 + 随机雪花字符</p>
 */
class EnablePGDocumentExtRequest extends AbstractModel
{
    /**
     * @var string <p>环境 id，租户级标识信息，开通环境时产生，全局唯一</p><p>参数格式：用户自定义小写英文命名 + 随机雪花字符</p>
     */
    public $EnvId;

    /**
     * @param string $EnvId <p>环境 id，租户级标识信息，开通环境时产生，全局唯一</p><p>参数格式：用户自定义小写英文命名 + 随机雪花字符</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
