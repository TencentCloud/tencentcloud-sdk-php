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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates请求参数结构体
 *
 * @method array getEngineVersions() 获取引擎版本，缺省则查询所有。可取值为：5.5、5.6、5.7、8.0。
 * @method void setEngineVersions(array $EngineVersions) 设置引擎版本，缺省则查询所有。可取值为：5.5、5.6、5.7、8.0。
 * @method array getEngineTypes() 获取引擎类型，缺省则查询所有。可取值为：InnoDB、RocksDB，不区分大小写。
 * @method void setEngineTypes(array $EngineTypes) 设置引擎类型，缺省则查询所有。可取值为：InnoDB、RocksDB，不区分大小写。
 * @method array getTemplateNames() 获取模板名称，缺省则查询所有。支持模糊匹配。
 * @method void setTemplateNames(array $TemplateNames) 设置模板名称，缺省则查询所有。支持模糊匹配。
 * @method array getTemplateIds() 获取模板 ID，缺省则查询所有。
 * @method void setTemplateIds(array $TemplateIds) 设置模板 ID，缺省则查询所有。
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array 引擎版本，缺省则查询所有。可取值为：5.5、5.6、5.7、8.0。
     */
    public $EngineVersions;

    /**
     * @var array 引擎类型，缺省则查询所有。可取值为：InnoDB、RocksDB，不区分大小写。
     */
    public $EngineTypes;

    /**
     * @var array 模板名称，缺省则查询所有。支持模糊匹配。
     */
    public $TemplateNames;

    /**
     * @var array 模板 ID，缺省则查询所有。
     */
    public $TemplateIds;

    /**
     * @param array $EngineVersions 引擎版本，缺省则查询所有。可取值为：5.5、5.6、5.7、8.0。
     * @param array $EngineTypes 引擎类型，缺省则查询所有。可取值为：InnoDB、RocksDB，不区分大小写。
     * @param array $TemplateNames 模板名称，缺省则查询所有。支持模糊匹配。
     * @param array $TemplateIds 模板 ID，缺省则查询所有。
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
        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }
    }
}
