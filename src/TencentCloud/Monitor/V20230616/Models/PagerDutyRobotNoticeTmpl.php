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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知自定义PagerDutyRobot内容模板
 *
 * @method string getBody() 获取请求体模板 仅支持json
 * @method void setBody(string $Body) 设置请求体模板 仅支持json
 * @method array getHeaders() 获取请求头 暂时未支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置请求头 暂时未支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitleTmpl() 获取标题模板
 * @method void setTitleTmpl(string $TitleTmpl) 设置标题模板
 */
class PagerDutyRobotNoticeTmpl extends AbstractModel
{
    /**
     * @var string 请求体模板 仅支持json
     */
    public $Body;

    /**
     * @var array 请求头 暂时未支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var string 标题模板
     */
    public $TitleTmpl;

    /**
     * @param string $Body 请求体模板 仅支持json
     * @param array $Headers 请求头 暂时未支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TitleTmpl 标题模板
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new PagerDutyRobotNoticeTmplHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("TitleTmpl",$param) and $param["TitleTmpl"] !== null) {
            $this->TitleTmpl = $param["TitleTmpl"];
        }
    }
}
