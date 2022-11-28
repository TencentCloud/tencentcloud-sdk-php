<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置文件修改信息
 *
 * @method string getFileName() 获取配置文件名称
 * @method void setFileName(string $FileName) 设置配置文件名称
 * @method string getOldConfValue() 获取配置文件旧内容，base64编码
 * @method void setOldConfValue(string $OldConfValue) 设置配置文件旧内容，base64编码
 * @method string getNewConfValue() 获取配置文件新内容，base64编码
 * @method void setNewConfValue(string $NewConfValue) 设置配置文件新内容，base64编码
 * @method string getFilePath() 获取保存配置文件的路径
 * @method void setFilePath(string $FilePath) 设置保存配置文件的路径
 */
class ConfigSubmitContext extends AbstractModel
{
    /**
     * @var string 配置文件名称
     */
    public $FileName;

    /**
     * @var string 配置文件旧内容，base64编码
     */
    public $OldConfValue;

    /**
     * @var string 配置文件新内容，base64编码
     */
    public $NewConfValue;

    /**
     * @var string 保存配置文件的路径
     */
    public $FilePath;

    /**
     * @param string $FileName 配置文件名称
     * @param string $OldConfValue 配置文件旧内容，base64编码
     * @param string $NewConfValue 配置文件新内容，base64编码
     * @param string $FilePath 保存配置文件的路径
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("OldConfValue",$param) and $param["OldConfValue"] !== null) {
            $this->OldConfValue = $param["OldConfValue"];
        }

        if (array_key_exists("NewConfValue",$param) and $param["NewConfValue"] !== null) {
            $this->NewConfValue = $param["NewConfValue"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
