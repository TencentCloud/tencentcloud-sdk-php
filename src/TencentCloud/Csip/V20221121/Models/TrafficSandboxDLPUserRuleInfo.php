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
 * DLP 用户规则结构化视图，按「检测规则」5 个检测维度返回，便于前端按维度渲染。只读输出字段，不影响 Create/Modify 入参
 *
 * @method array getFileName() 获取文件名称匹配维度：汇总去重后的文件名/正则列表
 * @method void setFileName(array $FileName) 设置文件名称匹配维度：汇总去重后的文件名/正则列表
 * @method TrafficSandboxDLPFileSizeRange getFileSize() 获取文件大小限制维度（区间）
 * @method void setFileSize(TrafficSandboxDLPFileSizeRange $FileSize) 设置文件大小限制维度（区间）
 * @method array getFileType() 获取文件格式限制维度：汇总去重后的格式/类目列表
 * @method void setFileType(array $FileType) 设置文件格式限制维度：汇总去重后的格式/类目列表
 * @method TrafficSandboxDLPURLRuleItem getURLRule() 获取外发域名检测维度（单值对象）
 * @method void setURLRule(TrafficSandboxDLPURLRuleItem $URLRule) 设置外发域名检测维度（单值对象）
 * @method array getTrafficRule() 获取外发内容检测维度（可多行，名称 + 正则）
 * @method void setTrafficRule(array $TrafficRule) 设置外发内容检测维度（可多行，名称 + 正则）
 */
class TrafficSandboxDLPUserRuleInfo extends AbstractModel
{
    /**
     * @var array 文件名称匹配维度：汇总去重后的文件名/正则列表
     */
    public $FileName;

    /**
     * @var TrafficSandboxDLPFileSizeRange 文件大小限制维度（区间）
     */
    public $FileSize;

    /**
     * @var array 文件格式限制维度：汇总去重后的格式/类目列表
     */
    public $FileType;

    /**
     * @var TrafficSandboxDLPURLRuleItem 外发域名检测维度（单值对象）
     */
    public $URLRule;

    /**
     * @var array 外发内容检测维度（可多行，名称 + 正则）
     */
    public $TrafficRule;

    /**
     * @param array $FileName 文件名称匹配维度：汇总去重后的文件名/正则列表
     * @param TrafficSandboxDLPFileSizeRange $FileSize 文件大小限制维度（区间）
     * @param array $FileType 文件格式限制维度：汇总去重后的格式/类目列表
     * @param TrafficSandboxDLPURLRuleItem $URLRule 外发域名检测维度（单值对象）
     * @param array $TrafficRule 外发内容检测维度（可多行，名称 + 正则）
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = new TrafficSandboxDLPFileSizeRange();
            $this->FileSize->deserialize($param["FileSize"]);
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("URLRule",$param) and $param["URLRule"] !== null) {
            $this->URLRule = new TrafficSandboxDLPURLRuleItem();
            $this->URLRule->deserialize($param["URLRule"]);
        }

        if (array_key_exists("TrafficRule",$param) and $param["TrafficRule"] !== null) {
            $this->TrafficRule = [];
            foreach ($param["TrafficRule"] as $key => $value){
                $obj = new TrafficSandboxDLPTrafficRuleItem();
                $obj->deserialize($value);
                array_push($this->TrafficRule, $obj);
            }
        }
    }
}
