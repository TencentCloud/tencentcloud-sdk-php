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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlySecMiniAppScanReportList请求参数结构体
 *
 * @method string getMiniAppID() 获取小程序AppID
 * @method void setMiniAppID(string $MiniAppID) 设置小程序AppID
 * @method integer getMode() 获取诊断方式 1:基础诊断，2:深度诊断
 * @method void setMode(integer $Mode) 设置诊断方式 1:基础诊断，2:深度诊断
 * @method integer getStatus() 获取诊断状态 -1:查询全部, 0:排队中, 1:成功, 2:失败, 3:进行中
 * @method void setStatus(integer $Status) 设置诊断状态 -1:查询全部, 0:排队中, 1:成功, 2:失败, 3:进行中
 * @method integer getSize() 获取查询数量, 0:查询所有, 其他值:最近几次的诊断数量
 * @method void setSize(integer $Size) 设置查询数量, 0:查询所有, 其他值:最近几次的诊断数量
 * @method string getMiniAppVersion() 获取小程序版本
 * @method void setMiniAppVersion(string $MiniAppVersion) 设置小程序版本
 */
class DescribeFlySecMiniAppScanReportListRequest extends AbstractModel
{
    /**
     * @var string 小程序AppID
     */
    public $MiniAppID;

    /**
     * @var integer 诊断方式 1:基础诊断，2:深度诊断
     */
    public $Mode;

    /**
     * @var integer 诊断状态 -1:查询全部, 0:排队中, 1:成功, 2:失败, 3:进行中
     */
    public $Status;

    /**
     * @var integer 查询数量, 0:查询所有, 其他值:最近几次的诊断数量
     */
    public $Size;

    /**
     * @var string 小程序版本
     */
    public $MiniAppVersion;

    /**
     * @param string $MiniAppID 小程序AppID
     * @param integer $Mode 诊断方式 1:基础诊断，2:深度诊断
     * @param integer $Status 诊断状态 -1:查询全部, 0:排队中, 1:成功, 2:失败, 3:进行中
     * @param integer $Size 查询数量, 0:查询所有, 其他值:最近几次的诊断数量
     * @param string $MiniAppVersion 小程序版本
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
        if (array_key_exists("MiniAppID",$param) and $param["MiniAppID"] !== null) {
            $this->MiniAppID = $param["MiniAppID"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("MiniAppVersion",$param) and $param["MiniAppVersion"] !== null) {
            $this->MiniAppVersion = $param["MiniAppVersion"];
        }
    }
}
