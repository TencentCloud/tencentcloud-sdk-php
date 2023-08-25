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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyDSPADiscoveryRule请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getMatchOperator() 获取只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
 * @method void setMatchOperator(string $MatchOperator) 设置只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
 * @method DataRules getMetaRule() 获取字段名包含规则，最大支持选择9项
 * @method void setMetaRule(DataRules $MetaRule) 设置字段名包含规则，最大支持选择9项
 * @method DataRules getContentRule() 获取内容包含规则，最大支持选择9项
 * @method void setContentRule(DataRules $ContentRule) 设置内容包含规则，最大支持选择9项
 * @method string getVerifyMeta() 获取验证规则字段名，最大长度为1024个字符
 * @method void setVerifyMeta(string $VerifyMeta) 设置验证规则字段名，最大长度为1024个字符
 * @method string getVerifyContent() 获取验证规则数据内容，最大长度为1024个字符
 * @method void setVerifyContent(string $VerifyContent) 设置验证规则数据内容，最大长度为1024个字符
 */
class VerifyDSPADiscoveryRuleRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var string 只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
     */
    public $MatchOperator;

    /**
     * @var DataRules 字段名包含规则，最大支持选择9项
     */
    public $MetaRule;

    /**
     * @var DataRules 内容包含规则，最大支持选择9项
     */
    public $ContentRule;

    /**
     * @var string 验证规则字段名，最大长度为1024个字符
     */
    public $VerifyMeta;

    /**
     * @var string 验证规则数据内容，最大长度为1024个字符
     */
    public $VerifyContent;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $MatchOperator 只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
     * @param DataRules $MetaRule 字段名包含规则，最大支持选择9项
     * @param DataRules $ContentRule 内容包含规则，最大支持选择9项
     * @param string $VerifyMeta 验证规则字段名，最大长度为1024个字符
     * @param string $VerifyContent 验证规则数据内容，最大长度为1024个字符
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("MatchOperator",$param) and $param["MatchOperator"] !== null) {
            $this->MatchOperator = $param["MatchOperator"];
        }

        if (array_key_exists("MetaRule",$param) and $param["MetaRule"] !== null) {
            $this->MetaRule = new DataRules();
            $this->MetaRule->deserialize($param["MetaRule"]);
        }

        if (array_key_exists("ContentRule",$param) and $param["ContentRule"] !== null) {
            $this->ContentRule = new DataRules();
            $this->ContentRule->deserialize($param["ContentRule"]);
        }

        if (array_key_exists("VerifyMeta",$param) and $param["VerifyMeta"] !== null) {
            $this->VerifyMeta = $param["VerifyMeta"];
        }

        if (array_key_exists("VerifyContent",$param) and $param["VerifyContent"] !== null) {
            $this->VerifyContent = $param["VerifyContent"];
        }
    }
}
