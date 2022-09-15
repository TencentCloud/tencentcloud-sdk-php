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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述Es规则目标
 *
 * @method string getNetMode() 获取网络连接类型
 * @method void setNetMode(string $NetMode) 设置网络连接类型
 * @method string getIndexPrefix() 获取索引前缀
 * @method void setIndexPrefix(string $IndexPrefix) 设置索引前缀
 * @method string getRotationInterval() 获取es日志轮换粒度
 * @method void setRotationInterval(string $RotationInterval) 设置es日志轮换粒度
 * @method string getOutputMode() 获取DTS事件配置
 * @method void setOutputMode(string $OutputMode) 设置DTS事件配置
 * @method string getIndexSuffixMode() 获取DTS索引配置
 * @method void setIndexSuffixMode(string $IndexSuffixMode) 设置DTS索引配置
 * @method string getIndexTemplateType() 获取es模版类型
 * @method void setIndexTemplateType(string $IndexTemplateType) 设置es模版类型
 */
class ESTargetParams extends AbstractModel
{
    /**
     * @var string 网络连接类型
     */
    public $NetMode;

    /**
     * @var string 索引前缀
     */
    public $IndexPrefix;

    /**
     * @var string es日志轮换粒度
     */
    public $RotationInterval;

    /**
     * @var string DTS事件配置
     */
    public $OutputMode;

    /**
     * @var string DTS索引配置
     */
    public $IndexSuffixMode;

    /**
     * @var string es模版类型
     */
    public $IndexTemplateType;

    /**
     * @param string $NetMode 网络连接类型
     * @param string $IndexPrefix 索引前缀
     * @param string $RotationInterval es日志轮换粒度
     * @param string $OutputMode DTS事件配置
     * @param string $IndexSuffixMode DTS索引配置
     * @param string $IndexTemplateType es模版类型
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
        if (array_key_exists("NetMode",$param) and $param["NetMode"] !== null) {
            $this->NetMode = $param["NetMode"];
        }

        if (array_key_exists("IndexPrefix",$param) and $param["IndexPrefix"] !== null) {
            $this->IndexPrefix = $param["IndexPrefix"];
        }

        if (array_key_exists("RotationInterval",$param) and $param["RotationInterval"] !== null) {
            $this->RotationInterval = $param["RotationInterval"];
        }

        if (array_key_exists("OutputMode",$param) and $param["OutputMode"] !== null) {
            $this->OutputMode = $param["OutputMode"];
        }

        if (array_key_exists("IndexSuffixMode",$param) and $param["IndexSuffixMode"] !== null) {
            $this->IndexSuffixMode = $param["IndexSuffixMode"];
        }

        if (array_key_exists("IndexTemplateType",$param) and $param["IndexTemplateType"] !== null) {
            $this->IndexTemplateType = $param["IndexTemplateType"];
        }
    }
}
