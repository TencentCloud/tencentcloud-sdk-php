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
 * @method array getResources() 获取允许访问的资源列表，目前仅支持一个Resource
 * @method void setResources(array $Resources) 设置允许访问的资源列表，目前仅支持一个Resource
 * @method string getDomain() 获取分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyCode() 获取分享链接加密访问验证码。支持0-9和a-z(不区分大小写)在内的6个字符，可为空，代表免验证码访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyCode(string $VerifyCode) 设置分享链接加密访问验证码。支持0-9和a-z(不区分大小写)在内的6个字符，可为空，代表免验证码访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取默认查询范围的开始时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式
 * @method void setStartTime(string $StartTime) 设置默认查询范围的开始时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式
 * @method string getEndTime() 获取默认查询范围的结束时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式。注意，结束时间点要大于开始时间点
 * @method void setEndTime(string $EndTime) 设置默认查询范围的结束时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式。注意，结束时间点要大于开始时间点
 * @method integer getNowTime() 获取仅当StartTime/EndTime为相对时间时使用，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNowTime(integer $NowTime) 设置仅当StartTime/EndTime为相对时间时使用，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取默认的检索分析语句，仅当Type为2时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置默认的检索分析语句，仅当Type为2时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLockTimeRange() 获取是否允许访问者自行修改检索分析时间范围。默认不锁定（false）
 * @method void setIsLockTimeRange(boolean $IsLockTimeRange) 设置是否允许访问者自行修改检索分析时间范围。默认不锁定（false）
 * @method boolean getIsLockQuery() 获取是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态。默认不锁定（false）
 * @method void setIsLockQuery(boolean $IsLockQuery) 设置是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态。默认不锁定（false）
 * @method boolean getIsSupportLogExport() 获取检索页分享是否允许访问者下载日志，默认不允许（false）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportLogExport(boolean $IsSupportLogExport) 设置检索页分享是否允许访问者下载日志，默认不允许（false）
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var array 允许访问的资源列表，目前仅支持一个Resource
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
     * @var string 分享链接加密访问验证码。支持0-9和a-z(不区分大小写)在内的6个字符，可为空，代表免验证码访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyCode;

    /**
     * @var string 默认查询范围的开始时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式
     */
    public $StartTime;

    /**
     * @var string 默认查询范围的结束时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式。注意，结束时间点要大于开始时间点
     */
    public $EndTime;

    /**
     * @var integer 仅当StartTime/EndTime为相对时间时使用，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NowTime;

    /**
     * @var array 默认的检索分析语句，仅当Type为2时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var boolean 是否允许访问者自行修改检索分析时间范围。默认不锁定（false）
     */
    public $IsLockTimeRange;

    /**
     * @var boolean 是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态。默认不锁定（false）
     */
    public $IsLockQuery;

    /**
     * @var boolean 检索页分享是否允许访问者下载日志，默认不允许（false）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportLogExport;

    /**
     * @param string $Name 分享链接名称
     * @param integer $Type 仪表盘: 1; 检索页:2
     * @param integer $DurationMilliseconds 分享链接有效期，单位：毫秒，最长支持30天
     * @param array $Resources 允许访问的资源列表，目前仅支持一个Resource
     * @param string $Domain 分享链接域名，可选范围
- 公网匿名分享：填写clsshare.com
- datasight内网匿名分享(若开启)：datasight内网域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyCode 分享链接加密访问验证码。支持0-9和a-z(不区分大小写)在内的6个字符，可为空，代表免验证码访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 默认查询范围的开始时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式
     * @param string $EndTime 默认查询范围的结束时间点，支持绝对时间(13位Unix时间戳)或相对时间表达式。注意，结束时间点要大于开始时间点
     * @param integer $NowTime 仅当StartTime/EndTime为相对时间时使用，基于NowTime计算绝对时间，默认为创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 默认的检索分析语句，仅当Type为2时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLockTimeRange 是否允许访问者自行修改检索分析时间范围。默认不锁定（false）
     * @param boolean $IsLockQuery 是否允许访问者自行修改日志检索语句。在检索页分享中表示检索语句锁定状态；在仪表盘中表示过滤变量锁定状态。默认不锁定（false）
     * @param boolean $IsSupportLogExport 检索页分享是否允许访问者下载日志，默认不允许（false）
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("IsSupportLogExport",$param) and $param["IsSupportLogExport"] !== null) {
            $this->IsSupportLogExport = $param["IsSupportLogExport"];
        }
    }
}
