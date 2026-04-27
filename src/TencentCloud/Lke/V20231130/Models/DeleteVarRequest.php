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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVar请求参数结构体
 *
 * @method string getAppBizId() 获取<p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method void setAppBizId(string $AppBizId) 设置<p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method string getVarId() 获取<p>变量 ID，可通过 CreateVar；DescribeVar；DescribeVarList 接口返回结果中获取。DeleteVar</p>
 * @method void setVarId(string $VarId) 设置<p>变量 ID，可通过 CreateVar；DescribeVar；DescribeVarList 接口返回结果中获取。DeleteVar</p>
 * @method integer getVarModuleType() 获取<p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
 * @method void setVarModuleType(integer $VarModuleType) 设置<p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
 */
class DeleteVarRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     */
    public $AppBizId;

    /**
     * @var string <p>变量 ID，可通过 CreateVar；DescribeVar；DescribeVarList 接口返回结果中获取。DeleteVar</p>
     */
    public $VarId;

    /**
     * @var integer <p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
     */
    public $VarModuleType;

    /**
     * @param string $AppBizId <p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     * @param string $VarId <p>变量 ID，可通过 CreateVar；DescribeVar；DescribeVarList 接口返回结果中获取。DeleteVar</p>
     * @param integer $VarModuleType <p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("VarId",$param) and $param["VarId"] !== null) {
            $this->VarId = $param["VarId"];
        }

        if (array_key_exists("VarModuleType",$param) and $param["VarModuleType"] !== null) {
            $this->VarModuleType = $param["VarModuleType"];
        }
    }
}
