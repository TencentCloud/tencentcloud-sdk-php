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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主备流详细信息。
 *
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getPublishTime() 获取 UTC 格式，例如：2018-06-29T19:00:00Z。
注意：和北京时间相差8小时。
 * @method void setPublishTime(string $PublishTime) 设置 UTC 格式，例如：2018-06-29T19:00:00Z。
注意：和北京时间相差8小时。
 * @method string getUpstreamSequence() 获取推流唯一标识。
 * @method void setUpstreamSequence(string $UpstreamSequence) 设置推流唯一标识。
 * @method string getSourceFrom() 获取推流来源。示例：
直推流；
拉流转推(1234)；
注意：拉流转推来源括号中为拉流转推的任务 
 ID。
 * @method void setSourceFrom(string $SourceFrom) 设置推流来源。示例：
直推流；
拉流转推(1234)；
注意：拉流转推来源括号中为拉流转推的任务 
 ID。
 * @method integer getMasterFlag() 获取主备标识。
当前流为主流：1，
当前流为备流: 0。
 * @method void setMasterFlag(integer $MasterFlag) 设置主备标识。
当前流为主流：1，
当前流为备流: 0。
 */
class BackupStreamDetailData extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string  UTC 格式，例如：2018-06-29T19:00:00Z。
注意：和北京时间相差8小时。
     */
    public $PublishTime;

    /**
     * @var string 推流唯一标识。
     */
    public $UpstreamSequence;

    /**
     * @var string 推流来源。示例：
直推流；
拉流转推(1234)；
注意：拉流转推来源括号中为拉流转推的任务 
 ID。
     */
    public $SourceFrom;

    /**
     * @var integer 主备标识。
当前流为主流：1，
当前流为备流: 0。
     */
    public $MasterFlag;

    /**
     * @param string $DomainName 推流域名。
     * @param string $AppName 推流路径。
     * @param string $PublishTime  UTC 格式，例如：2018-06-29T19:00:00Z。
注意：和北京时间相差8小时。
     * @param string $UpstreamSequence 推流唯一标识。
     * @param string $SourceFrom 推流来源。示例：
直推流；
拉流转推(1234)；
注意：拉流转推来源括号中为拉流转推的任务 
 ID。
     * @param integer $MasterFlag 主备标识。
当前流为主流：1，
当前流为备流: 0。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("UpstreamSequence",$param) and $param["UpstreamSequence"] !== null) {
            $this->UpstreamSequence = $param["UpstreamSequence"];
        }

        if (array_key_exists("SourceFrom",$param) and $param["SourceFrom"] !== null) {
            $this->SourceFrom = $param["SourceFrom"];
        }

        if (array_key_exists("MasterFlag",$param) and $param["MasterFlag"] !== null) {
            $this->MasterFlag = $param["MasterFlag"];
        }
    }
}
