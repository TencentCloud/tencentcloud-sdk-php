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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentInstallCommand返回参数结构体
 *
 * @method string getLinuxCommand() 获取linux系统安装命令
 * @method void setLinuxCommand(string $LinuxCommand) 设置linux系统安装命令
 * @method string getWindowsCommand() 获取windows系统安装命令（windows2008及以上）
 * @method void setWindowsCommand(string $WindowsCommand) 设置windows系统安装命令（windows2008及以上）
 * @method string getWindowsStepOne() 获取windows系统安装命令第一步（windows2003）
 * @method void setWindowsStepOne(string $WindowsStepOne) 设置windows系统安装命令第一步（windows2003）
 * @method string getWindowsStepTwo() 获取windows系统安装命令第二步（windows2003）
 * @method void setWindowsStepTwo(string $WindowsStepTwo) 设置windows系统安装命令第二步（windows2003）
 * @method string getWindowsDownloadUrl() 获取windows版agent下载链接
 * @method void setWindowsDownloadUrl(string $WindowsDownloadUrl) 设置windows版agent下载链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentInstallCommandResponse extends AbstractModel
{
    /**
     * @var string linux系统安装命令
     */
    public $LinuxCommand;

    /**
     * @var string windows系统安装命令（windows2008及以上）
     */
    public $WindowsCommand;

    /**
     * @var string windows系统安装命令第一步（windows2003）
     */
    public $WindowsStepOne;

    /**
     * @var string windows系统安装命令第二步（windows2003）
     */
    public $WindowsStepTwo;

    /**
     * @var string windows版agent下载链接
     */
    public $WindowsDownloadUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LinuxCommand linux系统安装命令
     * @param string $WindowsCommand windows系统安装命令（windows2008及以上）
     * @param string $WindowsStepOne windows系统安装命令第一步（windows2003）
     * @param string $WindowsStepTwo windows系统安装命令第二步（windows2003）
     * @param string $WindowsDownloadUrl windows版agent下载链接
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LinuxCommand",$param) and $param["LinuxCommand"] !== null) {
            $this->LinuxCommand = $param["LinuxCommand"];
        }

        if (array_key_exists("WindowsCommand",$param) and $param["WindowsCommand"] !== null) {
            $this->WindowsCommand = $param["WindowsCommand"];
        }

        if (array_key_exists("WindowsStepOne",$param) and $param["WindowsStepOne"] !== null) {
            $this->WindowsStepOne = $param["WindowsStepOne"];
        }

        if (array_key_exists("WindowsStepTwo",$param) and $param["WindowsStepTwo"] !== null) {
            $this->WindowsStepTwo = $param["WindowsStepTwo"];
        }

        if (array_key_exists("WindowsDownloadUrl",$param) and $param["WindowsDownloadUrl"] !== null) {
            $this->WindowsDownloadUrl = $param["WindowsDownloadUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
