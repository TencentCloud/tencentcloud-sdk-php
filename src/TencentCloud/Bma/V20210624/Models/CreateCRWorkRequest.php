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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCRWork请求参数结构体
 *
 * @method string getWorkName() 获取作品名称
 * @method void setWorkName(string $WorkName) 设置作品名称
 * @method string getWorkCategory() 获取作品分类
 * @method void setWorkCategory(string $WorkCategory) 设置作品分类
 * @method string getWorkType() 获取作品内容类型
 * @method void setWorkType(string $WorkType) 设置作品内容类型
 * @method string getWorkSign() 获取作品标签
 * @method void setWorkSign(string $WorkSign) 设置作品标签
 * @method string getWorkPic() 获取作品图片
 * @method void setWorkPic(string $WorkPic) 设置作品图片
 * @method string getWorkDesc() 获取创作描述
 * @method void setWorkDesc(string $WorkDesc) 设置创作描述
 * @method string getIsOriginal() 获取是否原创 0:否 1:是
 * @method void setIsOriginal(string $IsOriginal) 设置是否原创 0:否 1:是
 * @method string getIsRelease() 获取是否发布 0：未发布 1：已发布
 * @method void setIsRelease(string $IsRelease) 设置是否发布 0：未发布 1：已发布
 * @method integer getProducerID() 获取著作权人ID
 * @method void setProducerID(integer $ProducerID) 设置著作权人ID
 * @method string getProduceTime() 获取创作时间
 * @method void setProduceTime(string $ProduceTime) 设置创作时间
 * @method string getSampleContentURL() 获取样品文件路径
 * @method void setSampleContentURL(string $SampleContentURL) 设置样品文件路径
 * @method string getSampleDownloadURL() 获取样本下载Url
 * @method void setSampleDownloadURL(string $SampleDownloadURL) 设置样本下载Url
 * @method string getGrantType() 获取授予类型
 * @method void setGrantType(string $GrantType) 设置授予类型
 * @method string getSamplePublicURL() 获取作品发布Url
 * @method void setSamplePublicURL(string $SamplePublicURL) 设置作品发布Url
 * @method string getIsMonitor() 获取是否启用监测 0：不启用 1：启用 默认为0
 * @method void setIsMonitor(string $IsMonitor) 设置是否启用监测 0：不启用 1：启用 默认为0
 * @method string getIsCert() 获取是否启用存证0：不存证  2：存证 默认为0
 * @method void setIsCert(string $IsCert) 设置是否启用存证0：不存证  2：存证 默认为0
 * @method string getCertUrl() 获取存证回调地址
 * @method void setCertUrl(string $CertUrl) 设置存证回调地址
 * @method string getMonitorUrl() 获取监测回调地址
 * @method void setMonitorUrl(string $MonitorUrl) 设置监测回调地址
 * @method string getProduceType() 获取创作性质（原创,改编,翻译,汇编,注释,整理,其他)
 * @method void setProduceType(string $ProduceType) 设置创作性质（原创,改编,翻译,汇编,注释,整理,其他)
 * @method array getWhiteLists() 获取白名单
 * @method void setWhiteLists(array $WhiteLists) 设置白名单
 * @method integer getWorkId() 获取作品ID
 * @method void setWorkId(integer $WorkId) 设置作品ID
 * @method string getProducerName() 获取著作权人姓名
 * @method void setProducerName(string $ProducerName) 设置著作权人姓名
 * @method string getNickname() 获取作者
 * @method void setNickname(string $Nickname) 设置作者
 * @method string getAuthorization() 获取授权书
 * @method void setAuthorization(string $Authorization) 设置授权书
 * @method string getAuthorizationStartTime() 获取授权书开始时间
 * @method void setAuthorizationStartTime(string $AuthorizationStartTime) 设置授权书开始时间
 * @method string getAuthorizationEndTime() 获取授权书结束时间
 * @method void setAuthorizationEndTime(string $AuthorizationEndTime) 设置授权书结束时间
 * @method string getContentType() 获取内容格式
 * @method void setContentType(string $ContentType) 设置内容格式
 * @method string getContent() 获取文件内容
 * @method void setContent(string $Content) 设置文件内容
 * @method string getMonitorEndTime() 获取监测结束时间
 * @method void setMonitorEndTime(string $MonitorEndTime) 设置监测结束时间
 * @method string getApplierId() 获取申请人ID
 * @method void setApplierId(string $ApplierId) 设置申请人ID
 * @method string getApplierName() 获取申请人姓名
 * @method void setApplierName(string $ApplierName) 设置申请人姓名
 */
class CreateCRWorkRequest extends AbstractModel
{
    /**
     * @var string 作品名称
     */
    public $WorkName;

    /**
     * @var string 作品分类
     */
    public $WorkCategory;

    /**
     * @var string 作品内容类型
     */
    public $WorkType;

    /**
     * @var string 作品标签
     */
    public $WorkSign;

    /**
     * @var string 作品图片
     */
    public $WorkPic;

    /**
     * @var string 创作描述
     */
    public $WorkDesc;

    /**
     * @var string 是否原创 0:否 1:是
     */
    public $IsOriginal;

    /**
     * @var string 是否发布 0：未发布 1：已发布
     */
    public $IsRelease;

    /**
     * @var integer 著作权人ID
     */
    public $ProducerID;

    /**
     * @var string 创作时间
     */
    public $ProduceTime;

    /**
     * @var string 样品文件路径
     */
    public $SampleContentURL;

    /**
     * @var string 样本下载Url
     */
    public $SampleDownloadURL;

    /**
     * @var string 授予类型
     */
    public $GrantType;

    /**
     * @var string 作品发布Url
     */
    public $SamplePublicURL;

    /**
     * @var string 是否启用监测 0：不启用 1：启用 默认为0
     */
    public $IsMonitor;

    /**
     * @var string 是否启用存证0：不存证  2：存证 默认为0
     */
    public $IsCert;

    /**
     * @var string 存证回调地址
     */
    public $CertUrl;

    /**
     * @var string 监测回调地址
     */
    public $MonitorUrl;

    /**
     * @var string 创作性质（原创,改编,翻译,汇编,注释,整理,其他)
     */
    public $ProduceType;

    /**
     * @var array 白名单
     */
    public $WhiteLists;

    /**
     * @var integer 作品ID
     */
    public $WorkId;

    /**
     * @var string 著作权人姓名
     */
    public $ProducerName;

    /**
     * @var string 作者
     */
    public $Nickname;

    /**
     * @var string 授权书
     */
    public $Authorization;

    /**
     * @var string 授权书开始时间
     */
    public $AuthorizationStartTime;

    /**
     * @var string 授权书结束时间
     */
    public $AuthorizationEndTime;

    /**
     * @var string 内容格式
     */
    public $ContentType;

    /**
     * @var string 文件内容
     */
    public $Content;

    /**
     * @var string 监测结束时间
     */
    public $MonitorEndTime;

    /**
     * @var string 申请人ID
     */
    public $ApplierId;

    /**
     * @var string 申请人姓名
     */
    public $ApplierName;

    /**
     * @param string $WorkName 作品名称
     * @param string $WorkCategory 作品分类
     * @param string $WorkType 作品内容类型
     * @param string $WorkSign 作品标签
     * @param string $WorkPic 作品图片
     * @param string $WorkDesc 创作描述
     * @param string $IsOriginal 是否原创 0:否 1:是
     * @param string $IsRelease 是否发布 0：未发布 1：已发布
     * @param integer $ProducerID 著作权人ID
     * @param string $ProduceTime 创作时间
     * @param string $SampleContentURL 样品文件路径
     * @param string $SampleDownloadURL 样本下载Url
     * @param string $GrantType 授予类型
     * @param string $SamplePublicURL 作品发布Url
     * @param string $IsMonitor 是否启用监测 0：不启用 1：启用 默认为0
     * @param string $IsCert 是否启用存证0：不存证  2：存证 默认为0
     * @param string $CertUrl 存证回调地址
     * @param string $MonitorUrl 监测回调地址
     * @param string $ProduceType 创作性质（原创,改编,翻译,汇编,注释,整理,其他)
     * @param array $WhiteLists 白名单
     * @param integer $WorkId 作品ID
     * @param string $ProducerName 著作权人姓名
     * @param string $Nickname 作者
     * @param string $Authorization 授权书
     * @param string $AuthorizationStartTime 授权书开始时间
     * @param string $AuthorizationEndTime 授权书结束时间
     * @param string $ContentType 内容格式
     * @param string $Content 文件内容
     * @param string $MonitorEndTime 监测结束时间
     * @param string $ApplierId 申请人ID
     * @param string $ApplierName 申请人姓名
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
        if (array_key_exists("WorkName",$param) and $param["WorkName"] !== null) {
            $this->WorkName = $param["WorkName"];
        }

        if (array_key_exists("WorkCategory",$param) and $param["WorkCategory"] !== null) {
            $this->WorkCategory = $param["WorkCategory"];
        }

        if (array_key_exists("WorkType",$param) and $param["WorkType"] !== null) {
            $this->WorkType = $param["WorkType"];
        }

        if (array_key_exists("WorkSign",$param) and $param["WorkSign"] !== null) {
            $this->WorkSign = $param["WorkSign"];
        }

        if (array_key_exists("WorkPic",$param) and $param["WorkPic"] !== null) {
            $this->WorkPic = $param["WorkPic"];
        }

        if (array_key_exists("WorkDesc",$param) and $param["WorkDesc"] !== null) {
            $this->WorkDesc = $param["WorkDesc"];
        }

        if (array_key_exists("IsOriginal",$param) and $param["IsOriginal"] !== null) {
            $this->IsOriginal = $param["IsOriginal"];
        }

        if (array_key_exists("IsRelease",$param) and $param["IsRelease"] !== null) {
            $this->IsRelease = $param["IsRelease"];
        }

        if (array_key_exists("ProducerID",$param) and $param["ProducerID"] !== null) {
            $this->ProducerID = $param["ProducerID"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("SampleContentURL",$param) and $param["SampleContentURL"] !== null) {
            $this->SampleContentURL = $param["SampleContentURL"];
        }

        if (array_key_exists("SampleDownloadURL",$param) and $param["SampleDownloadURL"] !== null) {
            $this->SampleDownloadURL = $param["SampleDownloadURL"];
        }

        if (array_key_exists("GrantType",$param) and $param["GrantType"] !== null) {
            $this->GrantType = $param["GrantType"];
        }

        if (array_key_exists("SamplePublicURL",$param) and $param["SamplePublicURL"] !== null) {
            $this->SamplePublicURL = $param["SamplePublicURL"];
        }

        if (array_key_exists("IsMonitor",$param) and $param["IsMonitor"] !== null) {
            $this->IsMonitor = $param["IsMonitor"];
        }

        if (array_key_exists("IsCert",$param) and $param["IsCert"] !== null) {
            $this->IsCert = $param["IsCert"];
        }

        if (array_key_exists("CertUrl",$param) and $param["CertUrl"] !== null) {
            $this->CertUrl = $param["CertUrl"];
        }

        if (array_key_exists("MonitorUrl",$param) and $param["MonitorUrl"] !== null) {
            $this->MonitorUrl = $param["MonitorUrl"];
        }

        if (array_key_exists("ProduceType",$param) and $param["ProduceType"] !== null) {
            $this->ProduceType = $param["ProduceType"];
        }

        if (array_key_exists("WhiteLists",$param) and $param["WhiteLists"] !== null) {
            $this->WhiteLists = $param["WhiteLists"];
        }

        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("AuthorizationStartTime",$param) and $param["AuthorizationStartTime"] !== null) {
            $this->AuthorizationStartTime = $param["AuthorizationStartTime"];
        }

        if (array_key_exists("AuthorizationEndTime",$param) and $param["AuthorizationEndTime"] !== null) {
            $this->AuthorizationEndTime = $param["AuthorizationEndTime"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("MonitorEndTime",$param) and $param["MonitorEndTime"] !== null) {
            $this->MonitorEndTime = $param["MonitorEndTime"];
        }

        if (array_key_exists("ApplierId",$param) and $param["ApplierId"] !== null) {
            $this->ApplierId = $param["ApplierId"];
        }

        if (array_key_exists("ApplierName",$param) and $param["ApplierName"] !== null) {
            $this->ApplierName = $param["ApplierName"];
        }
    }
}
