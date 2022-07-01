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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUrlDetectionResult返回参数结构体
 *
 * @method integer getResultCode() 获取[查询结果]查询结果；枚举值：0 查询成功，否则查询失败
 * @method void setResultCode(integer $ResultCode) 设置[查询结果]查询结果；枚举值：0 查询成功，否则查询失败
 * @method integer getRespVer() 获取[固定信息]响应协议版本号；
 * @method void setRespVer(integer $RespVer) 设置[固定信息]响应协议版本号；
 * @method integer getUrlType() 获取[查询结果]url恶意状态；枚举值：1-灰， 2-黑（具体的恶意类型参考恶意类型定义Eviltype字段) ，3-非腾讯白名单，4-腾讯白名单。查询结果（level、evilclass、eviltype）这3个字段在Urltype=2（url状态为黑）下才有意义。
 * @method void setUrlType(integer $UrlType) 设置[查询结果]url恶意状态；枚举值：1-灰， 2-黑（具体的恶意类型参考恶意类型定义Eviltype字段) ，3-非腾讯白名单，4-腾讯白名单。查询结果（level、evilclass、eviltype）这3个字段在Urltype=2（url状态为黑）下才有意义。
 * @method integer getEvilClass() 获取[查询结果]url恶意大类；枚举值：1-链接，2-Cgi，3-路劲，4-整站，5-整域。
 * @method void setEvilClass(integer $EvilClass) 设置[查询结果]url恶意大类；枚举值：1-链接，2-Cgi，3-路劲，4-整站，5-整域。
 * @method integer getEvilType() 获取[查询结果]url恶意类型；枚举值：1-社工欺诈（仿冒、账号钓鱼、中奖诈骗）；2-信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗；3-虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）；4-恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）；5-博彩网站（博彩网站，在线赌博网站）；6-色情网站（涉嫌传播色情内容，提供色情服务的网站；7-风险网站（弱类型，传播垃圾信息的网站, 如果客户端有阻断，不建议使用这个数据）；8-非法内容（根据法律法规不能传播的内容，主要为政治敏感内容，默认内部使用）
 * @method void setEvilType(integer $EvilType) 设置[查询结果]url恶意类型；枚举值：1-社工欺诈（仿冒、账号钓鱼、中奖诈骗）；2-信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗；3-虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）；4-恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）；5-博彩网站（博彩网站，在线赌博网站）；6-色情网站（涉嫌传播色情内容，提供色情服务的网站；7-风险网站（弱类型，传播垃圾信息的网站, 如果客户端有阻断，不建议使用这个数据）；8-非法内容（根据法律法规不能传播的内容，主要为政治敏感内容，默认内部使用）
 * @method integer getLevel() 获取[查询结果]url恶意级别
 * @method void setLevel(integer $Level) 设置[查询结果]url恶意级别
 * @method integer getDetectTime() 获取[查询详情]url检出时间
 * @method void setDetectTime(integer $DetectTime) 设置[查询详情]url检出时间
 * @method string getWording() 获取[查询详情]拦截Wording
 * @method void setWording(string $Wording) 设置[查询详情]拦截Wording
 * @method string getWordingTitle() 获取[查询详情]拦截Wording 标题
 * @method void setWordingTitle(string $WordingTitle) 设置[查询详情]拦截Wording 标题
 * @method string getUrlTypeDesc() 获取[查询结果]url恶意状态说明
 * @method void setUrlTypeDesc(string $UrlTypeDesc) 设置[查询结果]url恶意状态说明
 * @method string getEvilClassDesc() 获取[查询结果]url恶意大类说明
 * @method void setEvilClassDesc(string $EvilClassDesc) 设置[查询结果]url恶意大类说明
 * @method string getEvilTypeDesc() 获取[查询结果]url恶意类型说明
 * @method void setEvilTypeDesc(string $EvilTypeDesc) 设置[查询结果]url恶意类型说明
 * @method string getLevelDesc() 获取[查询结果]url恶意级别说明
 * @method void setLevelDesc(string $LevelDesc) 设置[查询结果]url恶意级别说明
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUrlDetectionResultResponse extends AbstractModel
{
    /**
     * @var integer [查询结果]查询结果；枚举值：0 查询成功，否则查询失败
     */
    public $ResultCode;

    /**
     * @var integer [固定信息]响应协议版本号；
     */
    public $RespVer;

    /**
     * @var integer [查询结果]url恶意状态；枚举值：1-灰， 2-黑（具体的恶意类型参考恶意类型定义Eviltype字段) ，3-非腾讯白名单，4-腾讯白名单。查询结果（level、evilclass、eviltype）这3个字段在Urltype=2（url状态为黑）下才有意义。
     */
    public $UrlType;

    /**
     * @var integer [查询结果]url恶意大类；枚举值：1-链接，2-Cgi，3-路劲，4-整站，5-整域。
     */
    public $EvilClass;

    /**
     * @var integer [查询结果]url恶意类型；枚举值：1-社工欺诈（仿冒、账号钓鱼、中奖诈骗）；2-信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗；3-虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）；4-恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）；5-博彩网站（博彩网站，在线赌博网站）；6-色情网站（涉嫌传播色情内容，提供色情服务的网站；7-风险网站（弱类型，传播垃圾信息的网站, 如果客户端有阻断，不建议使用这个数据）；8-非法内容（根据法律法规不能传播的内容，主要为政治敏感内容，默认内部使用）
     */
    public $EvilType;

    /**
     * @var integer [查询结果]url恶意级别
     */
    public $Level;

    /**
     * @var integer [查询详情]url检出时间
     */
    public $DetectTime;

    /**
     * @var string [查询详情]拦截Wording
     */
    public $Wording;

    /**
     * @var string [查询详情]拦截Wording 标题
     */
    public $WordingTitle;

    /**
     * @var string [查询结果]url恶意状态说明
     */
    public $UrlTypeDesc;

    /**
     * @var string [查询结果]url恶意大类说明
     */
    public $EvilClassDesc;

    /**
     * @var string [查询结果]url恶意类型说明
     */
    public $EvilTypeDesc;

    /**
     * @var string [查询结果]url恶意级别说明
     */
    public $LevelDesc;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ResultCode [查询结果]查询结果；枚举值：0 查询成功，否则查询失败
     * @param integer $RespVer [固定信息]响应协议版本号；
     * @param integer $UrlType [查询结果]url恶意状态；枚举值：1-灰， 2-黑（具体的恶意类型参考恶意类型定义Eviltype字段) ，3-非腾讯白名单，4-腾讯白名单。查询结果（level、evilclass、eviltype）这3个字段在Urltype=2（url状态为黑）下才有意义。
     * @param integer $EvilClass [查询结果]url恶意大类；枚举值：1-链接，2-Cgi，3-路劲，4-整站，5-整域。
     * @param integer $EvilType [查询结果]url恶意类型；枚举值：1-社工欺诈（仿冒、账号钓鱼、中奖诈骗）；2-信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗；3-虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）；4-恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）；5-博彩网站（博彩网站，在线赌博网站）；6-色情网站（涉嫌传播色情内容，提供色情服务的网站；7-风险网站（弱类型，传播垃圾信息的网站, 如果客户端有阻断，不建议使用这个数据）；8-非法内容（根据法律法规不能传播的内容，主要为政治敏感内容，默认内部使用）
     * @param integer $Level [查询结果]url恶意级别
     * @param integer $DetectTime [查询详情]url检出时间
     * @param string $Wording [查询详情]拦截Wording
     * @param string $WordingTitle [查询详情]拦截Wording 标题
     * @param string $UrlTypeDesc [查询结果]url恶意状态说明
     * @param string $EvilClassDesc [查询结果]url恶意大类说明
     * @param string $EvilTypeDesc [查询结果]url恶意类型说明
     * @param string $LevelDesc [查询结果]url恶意级别说明
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
        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("RespVer",$param) and $param["RespVer"] !== null) {
            $this->RespVer = $param["RespVer"];
        }

        if (array_key_exists("UrlType",$param) and $param["UrlType"] !== null) {
            $this->UrlType = $param["UrlType"];
        }

        if (array_key_exists("EvilClass",$param) and $param["EvilClass"] !== null) {
            $this->EvilClass = $param["EvilClass"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("Wording",$param) and $param["Wording"] !== null) {
            $this->Wording = $param["Wording"];
        }

        if (array_key_exists("WordingTitle",$param) and $param["WordingTitle"] !== null) {
            $this->WordingTitle = $param["WordingTitle"];
        }

        if (array_key_exists("UrlTypeDesc",$param) and $param["UrlTypeDesc"] !== null) {
            $this->UrlTypeDesc = $param["UrlTypeDesc"];
        }

        if (array_key_exists("EvilClassDesc",$param) and $param["EvilClassDesc"] !== null) {
            $this->EvilClassDesc = $param["EvilClassDesc"];
        }

        if (array_key_exists("EvilTypeDesc",$param) and $param["EvilTypeDesc"] !== null) {
            $this->EvilTypeDesc = $param["EvilTypeDesc"];
        }

        if (array_key_exists("LevelDesc",$param) and $param["LevelDesc"] !== null) {
            $this->LevelDesc = $param["LevelDesc"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
