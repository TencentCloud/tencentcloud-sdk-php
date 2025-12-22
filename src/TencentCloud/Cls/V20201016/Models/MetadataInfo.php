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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Splunk任务投递元信息
 *
 * @method string getFormat() 获取数据格式,rawlog/json
 * @method void setFormat(string $Format) 设置数据格式,rawlog/json
 * @method array getMetaFields() 获取投递字段，包括\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKG\_ID\_\_
 * @method void setMetaFields(array $MetaFields) 设置投递字段，包括\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKG\_ID\_\_
 * @method boolean getEnableTag() 获取是否投递__TAG__字段
 * @method void setEnableTag(boolean $EnableTag) 设置是否投递__TAG__字段
 * @method boolean getTagJsonTiled() 获取JSON是否平铺，投递__TAG__字段时必填
 * @method void setTagJsonTiled(boolean $TagJsonTiled) 设置JSON是否平铺，投递__TAG__字段时必填
 */
class MetadataInfo extends AbstractModel
{
    /**
     * @var string 数据格式,rawlog/json
     */
    public $Format;

    /**
     * @var array 投递字段，包括\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKG\_ID\_\_
     */
    public $MetaFields;

    /**
     * @var boolean 是否投递__TAG__字段
     */
    public $EnableTag;

    /**
     * @var boolean JSON是否平铺，投递__TAG__字段时必填
     */
    public $TagJsonTiled;

    /**
     * @param string $Format 数据格式,rawlog/json
     * @param array $MetaFields 投递字段，包括\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKG\_ID\_\_
     * @param boolean $EnableTag 是否投递__TAG__字段
     * @param boolean $TagJsonTiled JSON是否平铺，投递__TAG__字段时必填
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("TagJsonTiled",$param) and $param["TagJsonTiled"] !== null) {
            $this->TagJsonTiled = $param["TagJsonTiled"];
        }
    }
}
