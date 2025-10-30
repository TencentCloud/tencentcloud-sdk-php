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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyAndroidInstance请求参数结构体
 *
 * @method string getSourceAndroidInstanceId() 获取源安卓实例 ID
 * @method void setSourceAndroidInstanceId(string $SourceAndroidInstanceId) 设置源安卓实例 ID
 * @method string getTargetAndroidInstanceId() 获取目的安卓实例 ID
 * @method void setTargetAndroidInstanceId(string $TargetAndroidInstanceId) 设置目的安卓实例 ID
 * @method array getIncludes() 获取包含的路径，支持仅含一个通配符*，通配符不能出现在路径开始
 * @method void setIncludes(array $Includes) 设置包含的路径，支持仅含一个通配符*，通配符不能出现在路径开始
 * @method array getExcludes() 获取需要排除路径，支持仅含一个通配符*，通配符不能出现在路径开始
 * @method void setExcludes(array $Excludes) 设置需要排除路径，支持仅含一个通配符*，通配符不能出现在路径开始
 */
class CopyAndroidInstanceRequest extends AbstractModel
{
    /**
     * @var string 源安卓实例 ID
     */
    public $SourceAndroidInstanceId;

    /**
     * @var string 目的安卓实例 ID
     */
    public $TargetAndroidInstanceId;

    /**
     * @var array 包含的路径，支持仅含一个通配符*，通配符不能出现在路径开始
     */
    public $Includes;

    /**
     * @var array 需要排除路径，支持仅含一个通配符*，通配符不能出现在路径开始
     */
    public $Excludes;

    /**
     * @param string $SourceAndroidInstanceId 源安卓实例 ID
     * @param string $TargetAndroidInstanceId 目的安卓实例 ID
     * @param array $Includes 包含的路径，支持仅含一个通配符*，通配符不能出现在路径开始
     * @param array $Excludes 需要排除路径，支持仅含一个通配符*，通配符不能出现在路径开始
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
        if (array_key_exists("SourceAndroidInstanceId",$param) and $param["SourceAndroidInstanceId"] !== null) {
            $this->SourceAndroidInstanceId = $param["SourceAndroidInstanceId"];
        }

        if (array_key_exists("TargetAndroidInstanceId",$param) and $param["TargetAndroidInstanceId"] !== null) {
            $this->TargetAndroidInstanceId = $param["TargetAndroidInstanceId"];
        }

        if (array_key_exists("Includes",$param) and $param["Includes"] !== null) {
            $this->Includes = $param["Includes"];
        }

        if (array_key_exists("Excludes",$param) and $param["Excludes"] !== null) {
            $this->Excludes = $param["Excludes"];
        }
    }
}
