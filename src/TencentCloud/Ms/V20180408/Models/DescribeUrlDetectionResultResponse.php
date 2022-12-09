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
 * @method integer getRespVer() 获取[固定信息]响应协议版本号
 * @method void setRespVer(integer $RespVer) 设置[固定信息]响应协议版本号
 * @method integer getUrlType() 获取[查询结果]url恶意状态
枚举值：
0-1：未知，访问暂无风险。
2 ：	风险网址，具体的恶意类型定义参考恶意大类EvilClass字段。
3-4：安全，访问无风险。

注意：查询结果EvilClass字段在Urltype=2时，才有意义。
 * @method void setUrlType(integer $UrlType) 设置[查询结果]url恶意状态
枚举值：
0-1：未知，访问暂无风险。
2 ：	风险网址，具体的恶意类型定义参考恶意大类EvilClass字段。
3-4：安全，访问无风险。

注意：查询结果EvilClass字段在Urltype=2时，才有意义。
 * @method integer getEvilClass() 获取[查询结果]url恶意类型大类:{
    "1": "社工欺诈（仿冒、账号钓鱼、中奖诈骗）",
    "2": "信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗）",
    "3": "虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）",
    "4": "恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）",
    "5": "博彩网站（博彩网站，在线赌博网站）",
    "6": "色情网站（涉嫌传播色情内容，提供色情服务的网站）"
  }
 * @method void setEvilClass(integer $EvilClass) 设置[查询结果]url恶意类型大类:{
    "1": "社工欺诈（仿冒、账号钓鱼、中奖诈骗）",
    "2": "信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗）",
    "3": "虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）",
    "4": "恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）",
    "5": "博彩网站（博彩网站，在线赌博网站）",
    "6": "色情网站（涉嫌传播色情内容，提供色情服务的网站）"
  }
 * @method integer getEvilType() 获取该字段暂为空
 * @method void setEvilType(integer $EvilType) 设置该字段暂为空
 * @method integer getLevel() 获取该字段暂为空
 * @method void setLevel(integer $Level) 设置该字段暂为空
 * @method integer getDetectTime() 获取[查询详情]url检出时间；时间戳
 * @method void setDetectTime(integer $DetectTime) 设置[查询详情]url检出时间；时间戳
 * @method string getWording() 获取该字段暂为空
 * @method void setWording(string $Wording) 设置该字段暂为空
 * @method string getWordingTitle() 获取该字段暂为空
 * @method void setWordingTitle(string $WordingTitle) 设置该字段暂为空
 * @method string getUrlTypeDesc() 获取[查询结果]url恶意状态说明；为UrlType字段值对应的说明
 * @method void setUrlTypeDesc(string $UrlTypeDesc) 设置[查询结果]url恶意状态说明；为UrlType字段值对应的说明
 * @method string getEvilClassDesc() 获取[查询结果]url恶意大类说明；为EvilClass字段值对应的说明
 * @method void setEvilClassDesc(string $EvilClassDesc) 设置[查询结果]url恶意大类说明；为EvilClass字段值对应的说明
 * @method string getEvilTypeDesc() 获取该字段暂为空
 * @method void setEvilTypeDesc(string $EvilTypeDesc) 设置该字段暂为空
 * @method string getLevelDesc() 获取该字段暂为空
 * @method void setLevelDesc(string $LevelDesc) 设置该字段暂为空
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
     * @var integer [固定信息]响应协议版本号
     */
    public $RespVer;

    /**
     * @var integer [查询结果]url恶意状态
枚举值：
0-1：未知，访问暂无风险。
2 ：	风险网址，具体的恶意类型定义参考恶意大类EvilClass字段。
3-4：安全，访问无风险。

注意：查询结果EvilClass字段在Urltype=2时，才有意义。
     */
    public $UrlType;

    /**
     * @var integer [查询结果]url恶意类型大类:{
    "1": "社工欺诈（仿冒、账号钓鱼、中奖诈骗）",
    "2": "信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗）",
    "3": "虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）",
    "4": "恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）",
    "5": "博彩网站（博彩网站，在线赌博网站）",
    "6": "色情网站（涉嫌传播色情内容，提供色情服务的网站）"
  }
     */
    public $EvilClass;

    /**
     * @var integer 该字段暂为空
     */
    public $EvilType;

    /**
     * @var integer 该字段暂为空
     */
    public $Level;

    /**
     * @var integer [查询详情]url检出时间；时间戳
     */
    public $DetectTime;

    /**
     * @var string 该字段暂为空
     */
    public $Wording;

    /**
     * @var string 该字段暂为空
     */
    public $WordingTitle;

    /**
     * @var string [查询结果]url恶意状态说明；为UrlType字段值对应的说明
     */
    public $UrlTypeDesc;

    /**
     * @var string [查询结果]url恶意大类说明；为EvilClass字段值对应的说明
     */
    public $EvilClassDesc;

    /**
     * @var string 该字段暂为空
     */
    public $EvilTypeDesc;

    /**
     * @var string 该字段暂为空
     */
    public $LevelDesc;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ResultCode [查询结果]查询结果；枚举值：0 查询成功，否则查询失败
     * @param integer $RespVer [固定信息]响应协议版本号
     * @param integer $UrlType [查询结果]url恶意状态
枚举值：
0-1：未知，访问暂无风险。
2 ：	风险网址，具体的恶意类型定义参考恶意大类EvilClass字段。
3-4：安全，访问无风险。

注意：查询结果EvilClass字段在Urltype=2时，才有意义。
     * @param integer $EvilClass [查询结果]url恶意类型大类:{
    "1": "社工欺诈（仿冒、账号钓鱼、中奖诈骗）",
    "2": "信息诈骗（虚假充值、虚假兼职、虚假金融投资、虚假信用卡代办、网络赌博诈骗）",
    "3": "虚假销售（男女保健美容减肥产品、电子产品、虚假广告、违法销售）",
    "4": "恶意文件（病毒文件，木马文件，恶意apk文件的下载链接以及站点，挂马网站）",
    "5": "博彩网站（博彩网站，在线赌博网站）",
    "6": "色情网站（涉嫌传播色情内容，提供色情服务的网站）"
  }
     * @param integer $EvilType 该字段暂为空
     * @param integer $Level 该字段暂为空
     * @param integer $DetectTime [查询详情]url检出时间；时间戳
     * @param string $Wording 该字段暂为空
     * @param string $WordingTitle 该字段暂为空
     * @param string $UrlTypeDesc [查询结果]url恶意状态说明；为UrlType字段值对应的说明
     * @param string $EvilClassDesc [查询结果]url恶意大类说明；为EvilClass字段值对应的说明
     * @param string $EvilTypeDesc 该字段暂为空
     * @param string $LevelDesc 该字段暂为空
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
