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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 控制台分享配置
 *
 * @method string getName() 获取分享链接名称
 * @method void setName(string $Name) 设置分享链接名称
 * @method integer getType() 获取仪表盘: 1; 检索页:2
 * @method void setType(integer $Type) 设置仪表盘: 1; 检索页:2
 * @method integer getDurationMilliseconds() 获取分享链接有效期，单位：毫秒，最长支持30天
 * @method void setDurationMilliseconds(integer $DurationMilliseconds) 设置分享链接有效期，单位：毫秒，最长支持30天
 * @method array getResources() 获取允许访问的资源列表
 * @method void setResources(array $Resources) 设置允许访问的资源列表
 * @method string getDomain() 获取分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyCode() 获取验证码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyCode(string $VerifyCode) 设置验证码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
 * @method void setStartTime(string $StartTime) 设置开始时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
 * @method string getEndTime() 获取结束时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
 * @method void setEndTime(string $EndTime) 设置结束时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
 * @method integer getNowTime() 获取当StartTime/EndTime为相对时间时，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNowTime(integer $NowTime) 设置当StartTime/EndTime为相对时间时，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取params参数列表，当Type为2时支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置params参数列表，当Type为2时支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLockTimeRange() 获取是否允许访问者自行修改检索分析时间范围，默认不锁定
 * @method void setIsLockTimeRange(boolean $IsLockTimeRange) 设置是否允许访问者自行修改检索分析时间范围，默认不锁定
 * @method boolean getIsLockQuery() 获取是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态
 * @method void setIsLockQuery(boolean $IsLockQuery) 设置是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态
 */
class ConsoleSharingConfig extends AbstractModel
{
    /**
     * @var string 分享链接名称
     */
    public $Name;

    /**
     * @var integer 仪表盘: 1; 检索页:2
     */
    public $Type;

    /**
     * @var integer 分享链接有效期，单位：毫秒，最长支持30天
     */
    public $DurationMilliseconds;

    /**
     * @var array 允许访问的资源列表
     */
    public $Resources;

    /**
     * @var string 分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 验证码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyCode;

    /**
     * @var string 开始时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
     */
    public $StartTime;

    /**
     * @var string 结束时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
     */
    public $EndTime;

    /**
     * @var integer 当StartTime/EndTime为相对时间时，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NowTime;

    /**
     * @var array params参数列表，当Type为2时支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var boolean 是否允许访问者自行修改检索分析时间范围，默认不锁定
     */
    public $IsLockTimeRange;

    /**
     * @var boolean 是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态
     */
    public $IsLockQuery;

    /**
     * @param string $Name 分享链接名称
     * @param integer $Type 仪表盘: 1; 检索页:2
     * @param integer $DurationMilliseconds 分享链接有效期，单位：毫秒，最长支持30天
     * @param array $Resources 允许访问的资源列表
     * @param string $Domain 分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyCode 验证码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
     * @param string $EndTime 结束时间，支持绝对时间(13位时间戳字符串)/相对时间字符串
     * @param integer $NowTime 当StartTime/EndTime为相对时间时，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params params参数列表，当Type为2时支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLockTimeRange 是否允许访问者自行修改检索分析时间范围，默认不锁定
     * @param boolean $IsLockQuery 是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DurationMilliseconds",$param) and $param["DurationMilliseconds"] !== null) {
            $this->DurationMilliseconds = $param["DurationMilliseconds"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NowTime",$param) and $param["NowTime"] !== null) {
            $this->NowTime = $param["NowTime"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ConsoleSharingParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("IsLockTimeRange",$param) and $param["IsLockTimeRange"] !== null) {
            $this->IsLockTimeRange = $param["IsLockTimeRange"];
        }

        if (array_key_exists("IsLockQuery",$param) and $param["IsLockQuery"] !== null) {
            $this->IsLockQuery = $param["IsLockQuery"];
        }
    }
}
