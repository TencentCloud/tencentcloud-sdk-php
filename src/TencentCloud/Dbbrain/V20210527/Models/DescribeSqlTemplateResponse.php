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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSqlTemplate返回参数结构体
 *
 * @method string getSchema() 获取数据库名。
 * @method void setSchema(string $Schema) 设置数据库名。
 * @method string getSqlText() 获取SQL语句。
 * @method void setSqlText(string $SqlText) 设置SQL语句。
 * @method string getSqlType() 获取SQL类型。
 * @method void setSqlType(string $SqlType) 设置SQL类型。
 * @method string getSqlTemplate() 获取SQL模版内容。
 * @method void setSqlTemplate(string $SqlTemplate) 设置SQL模版内容。
 * @method integer getSqlId() 获取SQL模版ID。
 * @method void setSqlId(integer $SqlId) 设置SQL模版ID。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSqlTemplateResponse extends AbstractModel
{
    /**
     * @var string 数据库名。
     */
    public $Schema;

    /**
     * @var string SQL语句。
     */
    public $SqlText;

    /**
     * @var string SQL类型。
     */
    public $SqlType;

    /**
     * @var string SQL模版内容。
     */
    public $SqlTemplate;

    /**
     * @var integer SQL模版ID。
     */
    public $SqlId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Schema 数据库名。
     * @param string $SqlText SQL语句。
     * @param string $SqlType SQL类型。
     * @param string $SqlTemplate SQL模版内容。
     * @param integer $SqlId SQL模版ID。
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
        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("SqlId",$param) and $param["SqlId"] !== null) {
            $this->SqlId = $param["SqlId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
