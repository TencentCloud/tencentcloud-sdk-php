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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProjectSecMode请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getMode() 获取安全模式  
0：关闭项目共享密钥 
1：开启项目共享密钥
 * @method void setMode(integer $Mode) 设置安全模式  
0：关闭项目共享密钥 
1：开启项目共享密钥
 * @method string getKey() 获取项目密钥 32位 小写英文+数字；  项目密钥模式必填
 * @method void setKey(string $Key) 设置项目密钥 32位 小写英文+数字；  项目密钥模式必填
 * @method integer getAutoRegister() 获取自动注册方式
0：关闭自动注册
1：仅允许现场设备自动注册
2：仅允许远端设备自动注册
3：允许现场和远端设备均自动注册
 * @method void setAutoRegister(integer $AutoRegister) 设置自动注册方式
0：关闭自动注册
1：仅允许现场设备自动注册
2：仅允许远端设备自动注册
3：允许现场和远端设备均自动注册
 * @method integer getFieldListEnable() 获取是否允许远端获取现场设备列表（getGwList）
0：不允许
1：允许
 * @method void setFieldListEnable(integer $FieldListEnable) 设置是否允许远端获取现场设备列表（getGwList）
0：不允许
1：允许
 */
class ModifyProjectSecModeRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 安全模式  
0：关闭项目共享密钥 
1：开启项目共享密钥
     */
    public $Mode;

    /**
     * @var string 项目密钥 32位 小写英文+数字；  项目密钥模式必填
     */
    public $Key;

    /**
     * @var integer 自动注册方式
0：关闭自动注册
1：仅允许现场设备自动注册
2：仅允许远端设备自动注册
3：允许现场和远端设备均自动注册
     */
    public $AutoRegister;

    /**
     * @var integer 是否允许远端获取现场设备列表（getGwList）
0：不允许
1：允许
     */
    public $FieldListEnable;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $Mode 安全模式  
0：关闭项目共享密钥 
1：开启项目共享密钥
     * @param string $Key 项目密钥 32位 小写英文+数字；  项目密钥模式必填
     * @param integer $AutoRegister 自动注册方式
0：关闭自动注册
1：仅允许现场设备自动注册
2：仅允许远端设备自动注册
3：允许现场和远端设备均自动注册
     * @param integer $FieldListEnable 是否允许远端获取现场设备列表（getGwList）
0：不允许
1：允许
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("AutoRegister",$param) and $param["AutoRegister"] !== null) {
            $this->AutoRegister = $param["AutoRegister"];
        }

        if (array_key_exists("FieldListEnable",$param) and $param["FieldListEnable"] !== null) {
            $this->FieldListEnable = $param["FieldListEnable"];
        }
    }
}
