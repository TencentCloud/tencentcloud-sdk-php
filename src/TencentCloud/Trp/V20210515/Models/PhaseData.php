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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环节数据
 *
 * @method boolean getHeadEnabled() 获取启用头
 * @method void setHeadEnabled(boolean $HeadEnabled) 设置启用头
 * @method string getHeadTitle() 获取标题
 * @method void setHeadTitle(string $HeadTitle) 设置标题
 * @method string getKey() 获取标识符
 * @method void setKey(string $Key) 设置标识符
 * @method string getAppId() 获取小程序AppId
 * @method void setAppId(string $AppId) 设置小程序AppId
 * @method string getAppPath() 获取小程序AppPath
 * @method void setAppPath(string $AppPath) 设置小程序AppPath
 * @method string getAppName() 获取小程序名称AppName
 * @method void setAppName(string $AppName) 设置小程序名称AppName
 */
class PhaseData extends AbstractModel
{
    /**
     * @var boolean 启用头
     */
    public $HeadEnabled;

    /**
     * @var string 标题
     */
    public $HeadTitle;

    /**
     * @var string 标识符
     */
    public $Key;

    /**
     * @var string 小程序AppId
     */
    public $AppId;

    /**
     * @var string 小程序AppPath
     */
    public $AppPath;

    /**
     * @var string 小程序名称AppName
     */
    public $AppName;

    /**
     * @param boolean $HeadEnabled 启用头
     * @param string $HeadTitle 标题
     * @param string $Key 标识符
     * @param string $AppId 小程序AppId
     * @param string $AppPath 小程序AppPath
     * @param string $AppName 小程序名称AppName
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
        if (array_key_exists("HeadEnabled",$param) and $param["HeadEnabled"] !== null) {
            $this->HeadEnabled = $param["HeadEnabled"];
        }

        if (array_key_exists("HeadTitle",$param) and $param["HeadTitle"] !== null) {
            $this->HeadTitle = $param["HeadTitle"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppPath",$param) and $param["AppPath"] !== null) {
            $this->AppPath = $param["AppPath"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}
