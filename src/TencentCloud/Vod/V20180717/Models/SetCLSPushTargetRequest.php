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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetCLSPushTarget请求参数结构体
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method AreaCLSTargetInfo getChineseMainlandCLSTargetInfo() 获取要设置的中国大陆地区的日志推送目标。
 * @method void setChineseMainlandCLSTargetInfo(AreaCLSTargetInfo $ChineseMainlandCLSTargetInfo) 设置要设置的中国大陆地区的日志推送目标。
 * @method AreaCLSTargetInfo getOutsideChineseMainlandCLSTargetInfo() 获取要设置的中国大陆以外地区的日志推送目标。
 * @method void setOutsideChineseMainlandCLSTargetInfo(AreaCLSTargetInfo $OutsideChineseMainlandCLSTargetInfo) 设置要设置的中国大陆以外地区的日志推送目标。
 */
class SetCLSPushTargetRequest extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var AreaCLSTargetInfo 要设置的中国大陆地区的日志推送目标。
     */
    public $ChineseMainlandCLSTargetInfo;

    /**
     * @var AreaCLSTargetInfo 要设置的中国大陆以外地区的日志推送目标。
     */
    public $OutsideChineseMainlandCLSTargetInfo;

    /**
     * @param string $Domain 域名。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param AreaCLSTargetInfo $ChineseMainlandCLSTargetInfo 要设置的中国大陆地区的日志推送目标。
     * @param AreaCLSTargetInfo $OutsideChineseMainlandCLSTargetInfo 要设置的中国大陆以外地区的日志推送目标。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ChineseMainlandCLSTargetInfo",$param) and $param["ChineseMainlandCLSTargetInfo"] !== null) {
            $this->ChineseMainlandCLSTargetInfo = new AreaCLSTargetInfo();
            $this->ChineseMainlandCLSTargetInfo->deserialize($param["ChineseMainlandCLSTargetInfo"]);
        }

        if (array_key_exists("OutsideChineseMainlandCLSTargetInfo",$param) and $param["OutsideChineseMainlandCLSTargetInfo"] !== null) {
            $this->OutsideChineseMainlandCLSTargetInfo = new AreaCLSTargetInfo();
            $this->OutsideChineseMainlandCLSTargetInfo->deserialize($param["OutsideChineseMainlandCLSTargetInfo"]);
        }
    }
}
