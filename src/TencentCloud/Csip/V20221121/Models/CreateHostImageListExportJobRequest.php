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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHostImageListExportJob请求参数结构体
 *
 * @method string getClusterCaMD5() 获取<p>集群CA证书MD5（32位十六进制，必填）</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) 设置<p>集群CA证书MD5（32位十六进制，必填）</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method Filter getFilter() 获取<p>通用ListFilter结构（含Filters数组 + ListFindOption分页）<br>支持的过滤字段：Host / ImageId / ImageName / HasRunningContainer</p>
 * @method void setFilter(Filter $Filter) 设置<p>通用ListFilter结构（含Filters数组 + ListFindOption分页）<br>支持的过滤字段：Host / ImageId / ImageName / HasRunningContainer</p>
 * @method array getExportFields() 获取<p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ImageId：镜像ID<br>ImageName：镜像名<br>ImageVersion：镜像版本<br>ContainerCount：关联容器数<br>HostCount：关联主机数<br>CreateTime：创建时间<br>NickName：所属账号昵称（单账号模式下自动排除）<br>ScanStatus：扫描状态<br>LastScanTime：最近扫描完成时间<br>VulCountCritical：critical级别漏洞数<br>VulCountHigh：high级别漏洞数<br>VulCountMedium：medium级别漏洞数<br>VulCountLow：low级别漏洞数<br>VirusCountCritical：critical级别木马数<br>VirusCountHigh：high级别木马数<br>VirusCountMedium：medium级别木马数<br>VirusCountLow：low级别木马数<br>SensitiveCountCritical：critical级别敏感信息数<br>SensitiveCountHigh：high级别敏感信息数<br>SensitiveCountMedium：medium级别敏感信息数<br>SensitiveCountLow：low级别敏感信息数</p>
 * @method void setExportFields(array $ExportFields) 设置<p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ImageId：镜像ID<br>ImageName：镜像名<br>ImageVersion：镜像版本<br>ContainerCount：关联容器数<br>HostCount：关联主机数<br>CreateTime：创建时间<br>NickName：所属账号昵称（单账号模式下自动排除）<br>ScanStatus：扫描状态<br>LastScanTime：最近扫描完成时间<br>VulCountCritical：critical级别漏洞数<br>VulCountHigh：high级别漏洞数<br>VulCountMedium：medium级别漏洞数<br>VulCountLow：low级别漏洞数<br>VirusCountCritical：critical级别木马数<br>VirusCountHigh：high级别木马数<br>VirusCountMedium：medium级别木马数<br>VirusCountLow：low级别木马数<br>SensitiveCountCritical：critical级别敏感信息数<br>SensitiveCountHigh：high级别敏感信息数<br>SensitiveCountMedium：medium级别敏感信息数<br>SensitiveCountLow：low级别敏感信息数</p>
 */
class CreateHostImageListExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>集群CA证书MD5（32位十六进制，必填）</p>
     */
    public $ClusterCaMD5;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>通用ListFilter结构（含Filters数组 + ListFindOption分页）<br>支持的过滤字段：Host / ImageId / ImageName / HasRunningContainer</p>
     */
    public $Filter;

    /**
     * @var array <p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ImageId：镜像ID<br>ImageName：镜像名<br>ImageVersion：镜像版本<br>ContainerCount：关联容器数<br>HostCount：关联主机数<br>CreateTime：创建时间<br>NickName：所属账号昵称（单账号模式下自动排除）<br>ScanStatus：扫描状态<br>LastScanTime：最近扫描完成时间<br>VulCountCritical：critical级别漏洞数<br>VulCountHigh：high级别漏洞数<br>VulCountMedium：medium级别漏洞数<br>VulCountLow：low级别漏洞数<br>VirusCountCritical：critical级别木马数<br>VirusCountHigh：high级别木马数<br>VirusCountMedium：medium级别木马数<br>VirusCountLow：low级别木马数<br>SensitiveCountCritical：critical级别敏感信息数<br>SensitiveCountHigh：high级别敏感信息数<br>SensitiveCountMedium：medium级别敏感信息数<br>SensitiveCountLow：low级别敏感信息数</p>
     */
    public $ExportFields;

    /**
     * @param string $ClusterCaMD5 <p>集群CA证书MD5（32位十六进制，必填）</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param Filter $Filter <p>通用ListFilter结构（含Filters数组 + ListFindOption分页）<br>支持的过滤字段：Host / ImageId / ImageName / HasRunningContainer</p>
     * @param array $ExportFields <p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ImageId：镜像ID<br>ImageName：镜像名<br>ImageVersion：镜像版本<br>ContainerCount：关联容器数<br>HostCount：关联主机数<br>CreateTime：创建时间<br>NickName：所属账号昵称（单账号模式下自动排除）<br>ScanStatus：扫描状态<br>LastScanTime：最近扫描完成时间<br>VulCountCritical：critical级别漏洞数<br>VulCountHigh：high级别漏洞数<br>VulCountMedium：medium级别漏洞数<br>VulCountLow：low级别漏洞数<br>VirusCountCritical：critical级别木马数<br>VirusCountHigh：high级别木马数<br>VirusCountMedium：medium级别木马数<br>VirusCountLow：low级别木马数<br>SensitiveCountCritical：critical级别敏感信息数<br>SensitiveCountHigh：high级别敏感信息数<br>SensitiveCountMedium：medium级别敏感信息数<br>SensitiveCountLow：low级别敏感信息数</p>
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
        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ExportFields",$param) and $param["ExportFields"] !== null) {
            $this->ExportFields = $param["ExportFields"];
        }
    }
}
