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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护目录列表集
 *
 * @method string getDirName() 获取网站名称
 * @method void setDirName(string $DirName) 设置网站名称
 * @method string getDirPath() 获取网站防护目录地址
 * @method void setDirPath(string $DirPath) 设置网站防护目录地址
 * @method integer getRelatedServerNum() 获取关联服务器数
 * @method void setRelatedServerNum(integer $RelatedServerNum) 设置关联服务器数
 * @method integer getProtectServerNum() 获取防护服务器数
 * @method void setProtectServerNum(integer $ProtectServerNum) 设置防护服务器数
 * @method integer getNoProtectServerNum() 获取未防护服务器数
 * @method void setNoProtectServerNum(integer $NoProtectServerNum) 设置未防护服务器数
 * @method string getId() 获取唯一ID
 * @method void setId(string $Id) 设置唯一ID
 * @method integer getProtectStatus() 获取防护状态
 * @method void setProtectStatus(integer $ProtectStatus) 设置防护状态
 * @method integer getProtectException() 获取防护异常
 * @method void setProtectException(integer $ProtectException) 设置防护异常
 * @method integer getAutoRestoreSwitchStatus() 获取自动恢复开关 (Filters 过滤Quuid 时 返回) 默认0
 * @method void setAutoRestoreSwitchStatus(integer $AutoRestoreSwitchStatus) 设置自动恢复开关 (Filters 过滤Quuid 时 返回) 默认0
 */
class ProtectDirInfo extends AbstractModel
{
    /**
     * @var string 网站名称
     */
    public $DirName;

    /**
     * @var string 网站防护目录地址
     */
    public $DirPath;

    /**
     * @var integer 关联服务器数
     */
    public $RelatedServerNum;

    /**
     * @var integer 防护服务器数
     */
    public $ProtectServerNum;

    /**
     * @var integer 未防护服务器数
     */
    public $NoProtectServerNum;

    /**
     * @var string 唯一ID
     */
    public $Id;

    /**
     * @var integer 防护状态
     */
    public $ProtectStatus;

    /**
     * @var integer 防护异常
     */
    public $ProtectException;

    /**
     * @var integer 自动恢复开关 (Filters 过滤Quuid 时 返回) 默认0
     */
    public $AutoRestoreSwitchStatus;

    /**
     * @param string $DirName 网站名称
     * @param string $DirPath 网站防护目录地址
     * @param integer $RelatedServerNum 关联服务器数
     * @param integer $ProtectServerNum 防护服务器数
     * @param integer $NoProtectServerNum 未防护服务器数
     * @param string $Id 唯一ID
     * @param integer $ProtectStatus 防护状态
     * @param integer $ProtectException 防护异常
     * @param integer $AutoRestoreSwitchStatus 自动恢复开关 (Filters 过滤Quuid 时 返回) 默认0
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
        if (array_key_exists("DirName",$param) and $param["DirName"] !== null) {
            $this->DirName = $param["DirName"];
        }

        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            $this->DirPath = $param["DirPath"];
        }

        if (array_key_exists("RelatedServerNum",$param) and $param["RelatedServerNum"] !== null) {
            $this->RelatedServerNum = $param["RelatedServerNum"];
        }

        if (array_key_exists("ProtectServerNum",$param) and $param["ProtectServerNum"] !== null) {
            $this->ProtectServerNum = $param["ProtectServerNum"];
        }

        if (array_key_exists("NoProtectServerNum",$param) and $param["NoProtectServerNum"] !== null) {
            $this->NoProtectServerNum = $param["NoProtectServerNum"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("ProtectException",$param) and $param["ProtectException"] !== null) {
            $this->ProtectException = $param["ProtectException"];
        }

        if (array_key_exists("AutoRestoreSwitchStatus",$param) and $param["AutoRestoreSwitchStatus"] !== null) {
            $this->AutoRestoreSwitchStatus = $param["AutoRestoreSwitchStatus"];
        }
    }
}
