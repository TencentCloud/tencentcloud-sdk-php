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
 * 运行是安全详情，进程信息
 *
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getProcessAuthority() 获取进程权限
 * @method void setProcessAuthority(string $ProcessAuthority) 设置进程权限
 * @method integer getProcessId() 获取进程pid
 * @method void setProcessId(integer $ProcessId) 设置进程pid
 * @method string getProcessStartUser() 获取进程启动用户
 * @method void setProcessStartUser(string $ProcessStartUser) 设置进程启动用户
 * @method string getProcessUserGroup() 获取进程用户组
 * @method void setProcessUserGroup(string $ProcessUserGroup) 设置进程用户组
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getProcessTree() 获取进程树
 * @method void setProcessTree(string $ProcessTree) 设置进程树
 * @method string getProcessMd5() 获取进程md5
 * @method void setProcessMd5(string $ProcessMd5) 设置进程md5
 * @method string getProcessParam() 获取进程命令行参数
 * @method void setProcessParam(string $ProcessParam) 设置进程命令行参数
 */
class ProcessDetailInfo extends AbstractModel
{
    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 进程权限
     */
    public $ProcessAuthority;

    /**
     * @var integer 进程pid
     */
    public $ProcessId;

    /**
     * @var string 进程启动用户
     */
    public $ProcessStartUser;

    /**
     * @var string 进程用户组
     */
    public $ProcessUserGroup;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 进程树
     */
    public $ProcessTree;

    /**
     * @var string 进程md5
     */
    public $ProcessMd5;

    /**
     * @var string 进程命令行参数
     */
    public $ProcessParam;

    /**
     * @param string $ProcessName 进程名称
     * @param string $ProcessAuthority 进程权限
     * @param integer $ProcessId 进程pid
     * @param string $ProcessStartUser 进程启动用户
     * @param string $ProcessUserGroup 进程用户组
     * @param string $ProcessPath 进程路径
     * @param string $ProcessTree 进程树
     * @param string $ProcessMd5 进程md5
     * @param string $ProcessParam 进程命令行参数
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessAuthority",$param) and $param["ProcessAuthority"] !== null) {
            $this->ProcessAuthority = $param["ProcessAuthority"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessStartUser",$param) and $param["ProcessStartUser"] !== null) {
            $this->ProcessStartUser = $param["ProcessStartUser"];
        }

        if (array_key_exists("ProcessUserGroup",$param) and $param["ProcessUserGroup"] !== null) {
            $this->ProcessUserGroup = $param["ProcessUserGroup"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessTree",$param) and $param["ProcessTree"] !== null) {
            $this->ProcessTree = $param["ProcessTree"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("ProcessParam",$param) and $param["ProcessParam"] !== null) {
            $this->ProcessParam = $param["ProcessParam"];
        }
    }
}
