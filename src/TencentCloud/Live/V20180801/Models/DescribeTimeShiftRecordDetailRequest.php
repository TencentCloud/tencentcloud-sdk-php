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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeShiftRecordDetail请求参数结构体
 *
 * @method string getDomain() 获取推流域名。
 * @method void setDomain(string $Domain) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method integer getStartTime() 获取查询范围起始时间，Unix 时间戳。
 * @method void setStartTime(integer $StartTime) 设置查询范围起始时间，Unix 时间戳。
 * @method integer getEndTime() 获取查询范围终止时间，Unix 时间戳。 
 * @method void setEndTime(integer $EndTime) 设置查询范围终止时间，Unix 时间戳。 
 * @method string getDomainGroup() 获取推流域名所属组，没有域名组或者域名组为空字符串可不填。
 * @method void setDomainGroup(string $DomainGroup) 设置推流域名所属组，没有域名组或者域名组为空字符串可不填。
 * @method integer getTransCodeId() 获取转码模板ID，转码模板ID为0可不填。
 * @method void setTransCodeId(integer $TransCodeId) 设置转码模板ID，转码模板ID为0可不填。
 */
class DescribeTimeShiftRecordDetailRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $Domain;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var integer 查询范围起始时间，Unix 时间戳。
     */
    public $StartTime;

    /**
     * @var integer 查询范围终止时间，Unix 时间戳。 
     */
    public $EndTime;

    /**
     * @var string 推流域名所属组，没有域名组或者域名组为空字符串可不填。
     */
    public $DomainGroup;

    /**
     * @var integer 转码模板ID，转码模板ID为0可不填。
     */
    public $TransCodeId;

    /**
     * @param string $Domain 推流域名。
     * @param string $AppName 推流路径。
     * @param string $StreamName 流名称。
     * @param integer $StartTime 查询范围起始时间，Unix 时间戳。
     * @param integer $EndTime 查询范围终止时间，Unix 时间戳。 
     * @param string $DomainGroup 推流域名所属组，没有域名组或者域名组为空字符串可不填。
     * @param integer $TransCodeId 转码模板ID，转码模板ID为0可不填。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DomainGroup",$param) and $param["DomainGroup"] !== null) {
            $this->DomainGroup = $param["DomainGroup"];
        }

        if (array_key_exists("TransCodeId",$param) and $param["TransCodeId"] !== null) {
            $this->TransCodeId = $param["TransCodeId"];
        }
    }
}
